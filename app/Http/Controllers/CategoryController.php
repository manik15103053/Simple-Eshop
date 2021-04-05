<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){

        
        return view('category.index');
    }

    public function create(Request $requst){

        
        $this->validate($requst,[

            'name' => 'required',
            'address' => 'nullable'


        ]);
        $category = new Category();
        $category->name = $requst->name;
        $category->address = $requst->address;
        $category->save();
        return redirect()->back()->with('message', 'Successfully Added');


    }

    public function read(){

        $category = Category::all();

        return view('category.read',compact('category',$category));

    }
    public function viewCategory($id){

        $category = Category::find($id);
    
        $students = Student::where('category_id',$id)->get();

        return view('category.view',compact('students','category'));



    }
    ///Registration 

    public function showFrom(){

        return view('registration');
    }

    public function storeForm(Request $request){

        $this->validate($request,[

        'username'  =>  'required',
        'email'  =>  'required',
        'password'  =>  'required',
        'description'  =>  'nullable',



        ]);

        $category = new User();
        $category->username = $request->username;
        $category->email = $request->email;
        $category->password =bcrypt($request->password);
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->with('msg','Registration Successfully.');



    }

    public function loginForm(){

        return view('login');
    }

    public function storeLogin(Request $request){

        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('home');
        }


    }
}

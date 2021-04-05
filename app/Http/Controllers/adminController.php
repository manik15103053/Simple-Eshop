<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Student;

class adminController extends Controller
{
    public function index(){

        $student = Category::all();
       
        return view('index',compact('student'));
    }
    public function home(){
        return view('home');
    }


    public function store(Request $requst){
        
        $this->validate($requst,[

            'category_name' => 'required',
            'category_id' => 'required',
            'category_number' => 'required'


        ]);
        $students = new Student();
        $students->category_name = $requst->category_name;
        $students->category_id = $requst->category_id;
        $students->category_number = $requst->category_number;
        $students->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }
   
    public function read(){
        $students = Student::with('category')->paginate(5);
        return view('read',compact('students'));
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit',compact('student'));
    }

    public function update(Request $requst,$id){
        $this->validate($requst,[

            'category_name' => 'required',
            'category_number' => 'required'


        ]);
        $students =  Student::find($id);
        $students->category_name = $requst->category_name;
        $students->category_number = $requst->category_number;
        $students->save();
       return redirect(route('read'))->with('message', 'Successfully Update');
       // return redirect()->back()->with('message', 'Successfully Update');
    }

        public function delete($id){
            Student::find($id)->delete();
            return redirect(route('read'))->with('message', 'Successfully Delete');

        }

        public function view($id){

           

            $student = Student::find($id);
            return view('view',compact('student'));
        }
        public function showDetails($id){

            $student = Student::find($id);   
            return view('category.shwoDetails',compact('student'));
        }

    }
 


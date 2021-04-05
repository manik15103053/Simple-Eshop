@extends('master')


@section('content')
<div class="container">

<h2>Category Name:{{$category->name}}</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($students as $key=>$student)
 
    
     
      <tr>
      <td>{{$key+1}}</td>
      <td>{{$student->category_name}}</td>
      <td>
        <a href="{{route('showDetails',$student->id)}}"class="btn btn-success">View</a>
      </td>
      
    </tr>
   @endforeach
   
  </tbody>
</table>


</div>

@endsection
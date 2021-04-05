@extends('master')

@section('content')
<div class="container">

<h2 style="margin-left:8%">Data table</h2>
<table class="table table-bordered"style="margin-left:8%;width:70%">
  <thead class="thead-dark">
    <tr >
      <th scope="col">Sil</th>
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
     
      <th scope="col"class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category as $key=>$cat)
  <tr>

  <td>{{$key+1}}</td>
  <td>{{$cat->name}}</td>
  <td>Active</td>
  <td class="text-center">

    <a href="{{route('viewCategory',$cat->id)}}" class="btn btn-success">Details View</a>

  </td>
 
  </tr>

  @endforeach
    
  </tbody>
</table>
<div class=""style="margin-left:8%;width:70%">

</div>

</div>
@endsection
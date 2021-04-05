@extends('master')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success" style="margin-left:8%">
        {{ session()->get('message') }}
    </div>
@endif

<h2 style="margin-left:8%">Data table</h2>
<table class="table table-bordered"style="margin-left:8%;width:70%">
  <thead class="thead-dark">
    <tr >
      <th scope="col">Sil</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Category</th>
      <th scope="col"class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $i = 0; @endphp
    @foreach($students as $student)
    @php $i ++ @endphp
    <tr>
    <td>{{ $i }}</td>
      <td>{{$student->category_name}}</td>
      <td>{{$student->category_number}}</td>
      <td>{{$student->category->name}}</td>
      <td class="text-center">
        <a href="{{route('edit',$student->id)}}"class="btn btn-raised btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a> ||
<a href="{{route('view',$student->id)}}"class="btn btn-raised btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
</a> ||

    <form method="POST"id="delete-form-{{$student->id}}"action="{{route('delete',$student->id)}}"style="display:none;">
    {{csrf_field() }}
    {{method_field('delete' )}}
    </form>
    <button onclick="if(confirm('Are you sure,You went to delete this?')){

      event.preventDefault();
      document.getElementById('delete-form-{{$student->id}}').submit();

    }else{
      event.preventDefault();
    }"
    class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
        
      </td>


      
    </tr>
    @endforeach
    
  </tbody>
</table>
<div class=""style="margin-left:8%;width:70%">
{{$students->links()}}
</div>
@endsection
@extends('master')

@section('content')
<div class="container">

@if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-danger" role="alert" style="margin-left:8%">
        
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!</strong> {{$error}}
        </div>
        @endforeach
    @endif

@if(session()->has('msg'))
    <div class="alert alert-success" style="margin-left:8%">
        {{ session()->get('msg') }}
    </div>
@endif

<h2>Registration Form</h2>

<form method="POST"action="{{route('store.form')}}">
  @csrf
  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" name="username"class="form-control" id="username"  >

  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email"class="form-control" id="email" >
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password"class="form-control" id="password" >
  </div>

  <div class="form-group">
    <label for="description">Description</label>
   <textarea name="description" id="description" cols="30" rows="3"class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
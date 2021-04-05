@extends('master')



@section('content')

<div class="container">

<h2>View Page</h2>
    <p>
    <label for="">Category Name: {{$student->category_name}}</label>
    </p>
    <p>
    <label for="">Category Number: {{$student->category_number}}</label>

    </p>
</div>


@endsection
@extends('master');



@section('content')

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

@if(session()->has('message'))
    <div class="alert alert-success" style="margin-left:8%">
        {{ session()->get('message') }}
    </div>
@endif
    <div container>
        <div panel panel-default>
            <div panel-heading style="margin-left:8%">
            <h3 panel-title >Add Category</h3>
            
            </div>
            <div panel-body style="width:50%">
            <form style="margin-left:15%"method="POST"action="{{route('create')}}">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name"id="name" placeholder="Category Name">
                    
                </div>
                <div class="form-group">
                    <label for="address">Description</label>
                    <textarea name="address" id="" cols="30" rows="3"class="form-control"></textarea>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            </div>
        
        </div>
    
    </div>
@endsection
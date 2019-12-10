@extends('blog.layout')

@section('title','Index')

@section('content')
    <div class="container">
        <h1>Add New Article</h1>

        <form action="{{route('getInfo')}}" method="POST"> @csrf

            <label for="exampleInputEmail1">სათაური</label>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old ('title')}}">

            <label for="exampleInputEmail1">ქვე სათაური</label>
            @error('second_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="second_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old ('second_title')}}">

            <label for="exampleInputEmail1">ავტორი</label>
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old ('author')}}">

            <label for="exampleInputEmail1">აღწერა</label>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old ('description')}}">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

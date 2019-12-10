@extends('blog.layout')

@section('title','List')

@section('content')
    <div class="container">
        <h1>{{$info->title}}</h1>
        <h2>{{$info->second_title}}</h2>
        <p><b>Author: </b> {{$info->author}}</p>
        <p><b>Date: </b>{{$info->date}}</p>
        <p><b>Description: </b><br> {{$info->description}}</p>
    </div>
@endsection

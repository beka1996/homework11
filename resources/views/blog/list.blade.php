@extends('blog.layout')

@section('title','List')

@section('content')
    <div class="container">
        <h1>ბლოგები</h1>
        <div class="row">

            @foreach($post as $key =>$value)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$value->title}}</h5>
                            <p class="card-text">{{$value->second_title}}</p>
                            <p class="card-text">{{$value->date}}</p>
                            <a href="article/{{$value->id}}" class="btn btn-primary">Go Article</a>
                        </div>
                    </div>
                </div>
            @endforeach

         </div>
            {{$post->links()}}
@endsection

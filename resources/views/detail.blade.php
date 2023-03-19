@extends('app')

<head>
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>

@section('content')
<!-- 
    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->content }}
    </p> -->
    <section class="jumbotron">
        <h1>{{ $post->title }}</h1>
        <div class="container d-flex justify-content-center align-items-center">
            <p class="text-center">{{ $post->content }}</p>
        </div>
        
    </section>
    
@endsection



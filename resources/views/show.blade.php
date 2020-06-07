@extends('base')


@section('content')

<div class="container my-3">
    <h1>Question Title</h1>
    <p>{{$post->title}}</p>
    <hr>
    <h3>More About This Question</h3>
    <p>{{$post->description}}</p>
</div>

@endsection
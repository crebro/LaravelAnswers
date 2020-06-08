@extends('base')


@section('title')

<title>Edit Your Question</title>

@endsection

@section('content')

<div class="container">
<form action=" {{ route('posts.update', $post->id) }} " method='post' enctype="multipart/form-data">
@method('PUT')
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">What is your question about?</label>
    <input type="text" value=" {{ $posttitle }} " class="form-control" id="exampleFormControlInput1"  name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Give some detailed information about your question</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"> {{$postdesc}} </textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit Form </button>
</form>
</div>


@endsection
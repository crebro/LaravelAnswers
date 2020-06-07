@extends('base')


@section('content')

<div class="container my-3">
    <h1>Question Title</h1>
    <p>{{$post->title}}</p>
    <hr>
    <h3>More About This Question</h3>
    <p>{{$post->description}}</p>
    <form action="{{ route( }}" method="post">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Give some detailed information about your question</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit Form </button>
</form>
</div>

@endsection
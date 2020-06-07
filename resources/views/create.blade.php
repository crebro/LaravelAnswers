@extends('base')



@section('title')

<title>Create a Post</title>

@endsection
@section('content')
<div class="container">
<form action=" {{ route('posts.store') }} " method='post'>
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">What is your question about?</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Give some detailed information about your question</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit Form </button>
</form>
</div>


@endsection
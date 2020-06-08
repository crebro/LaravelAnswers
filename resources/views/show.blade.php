@extends('base')


@section('content')

<div class="container my-3">
    <h1>Question Title</h1>
    <p>{{$post->title}}</p>
    <hr>
    <h3>More About This Question</h3>
    <p>{{$post->description}}</p>
    <hr>
    @if ($post->answers->count() > 0)
    @php 
    $i = 0
    @endphp
    @foreach ($post->answers as $answer)

    <p> Answer: ({{++$i}}) {{$answer->content}} </p>
    <hr>

    @endforeach
    @else 
    <p>There are no answers for this question yet. Please consider submitting one.</p>
@endif
    <form action="{{ route('answers.store') }}" method="post">
    @csrf
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Help a User by Giving an Answer</label>
    <input type="hidden" name="post_id" value=" {{$post->id}} " >
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit Answer</button>
</form>
</div>

@endsection
@extends('base')

@section('content')

<div class="container my-3">
<h1> Recent Questions: </h1>
<hr>
@foreach ($questions as $question) 
<h1> {{$question->title}} </h1>
<p> {{$question->description}} </p>
<a href="{{ route('posts.show', $question->id)  }}" class="btn btn-primary">View Question </a>
<a href="{{ route('posts.edit', $question->id)  }}" class="btn btn-primary">Edit This Question </a>
<hr>

@endforeach
{{ $questions->links() }}
</div>
@endsection
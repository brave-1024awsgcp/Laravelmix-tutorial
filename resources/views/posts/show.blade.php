@extends('layouts.default')

@section('title', $post->id)

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
</h1>
<table>
<p><tr><th>category: </th><td> {{$post->category}}</td></tr></p>
<p><tr><th>fulstack: </th><td> {{$post->fulstack}}</td></tr></p>
<p><tr><th>frontend: </th><td> {{$post->frontend}}</td></tr></p>
<p><tr><th>frontend: </th><td> {{$post->frontend}}</td></tr></p>
<p><tr><th>gengo: </th><td> {{$post->gengo}}</td></tr></p>
<p><tr><th>serveres: </th><td> {{$post->serveres}}</td></tr></p>
<p><tr><th>os: </th><td> {{$post->os}}</td></tr></p>
</table>
@endsection

@extends('layouts.default')

@section('title', 'please koment')

@section('content')
<link rel="stylesheet" href="/css/style1.css">
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">データベース</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/server" class="nav-link">サーバー</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/frontend" class="nav-link">フレームワーク1</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/backend" class="nav-link">フレームワーク2</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link">コメント</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/index" class="nav-link">コメント履歴</a></li>
  </ul>
  </nav>
  <h1></h1>
  <img src= "/img/gl2.jpg" alt="">
        <table border ="1" align ="center">
  <tr>
    <th>NO</th><th>techcategory</th><th>serversidelang</th><th>frontendlang</th><th>databaselang</th><th>programing</th><th>techservice</th><th>operatingsystem</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->category }}</td>
    <td>{{ $post->fulstack }}</td>
    <td>{{ $post->frontend }}</td>
    <td>{{ $post->sqls }}</td>
    <td>{{ $post->gengo }}</td>
    <td>{{ $post->serveres }}</td>
    <td>{{ $post->os }}</td>
    </tr>
     <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
    {{ csrf_field() }}
   {{ method_field('delete') }}
   </form>
    <script src="/js/main.js"></script>
    @endforeach
   </table>
   
   <p>ご拝読いただきありがとうございました。</p>  
  <p>下記リンクより簡単なコメントをいただけますと幸いです。</p>
  <a href="http://127.0.0.1:8000/posts/create">コメントへ</a>     
  {{ $posts->links() }}
@endsection

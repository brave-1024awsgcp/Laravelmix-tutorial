@extends('layouts.default')

@section('content')

  <h1></h1>
<<<<<<< HEAD
  <img src= "/img/Macbook.jpg" alt="">
  <p>ご拝読いただきありがとうございました。</p>  
  <p>下記リンクより TOPへ戻れます。</p>
  <a href="/mypage">TOPへ</a>     
        <table border ="1" align ="center">       
=======
  <img src= "/img/slack.jpg" alt="">
        <table border ="1" align ="center">
>>>>>>> origin/master
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
  {{ $posts->links() }}
@endsection

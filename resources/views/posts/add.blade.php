@extends('layouts.default')

@section('title', 'New ')

@section('content')
    <table>
    <form action="/post/add" method="post">
       {{ csrf_field() }}
       <tr><th>category</th><td><input type="string" name="category"></td></tr>
       <tr><th>fulstack</th><td><input type="string" name="fulstack"></td></tr>
       <tr><th>frontend</th><td><input type="string" name="frontend "></td></tr>
       <tr><th>sqls</th><td><input type="string" name="sqls"></td></tr>
       <tr><th>gengo</th><td><input type="string" name="gengo"></td></tr>
       <tr><th>os</th><td><input type="string" name="os"></td></tr>
         <tr><th></th><td><input type="submit" value="send"></td></tr> 
  </form>
  </table>
@endsection

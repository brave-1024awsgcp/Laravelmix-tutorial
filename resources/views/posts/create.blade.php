@extends('layouts.default')

<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">データベース</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/backend" class="nav-link">サーバー</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/frontend" class="nav-link">ウェブフレームワーク</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link">コメント</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/index" class="nav-link">コメント履歴</a></li>
  </ul>
  </nav>
@section('content')
<h1>
<p>ご拝読いただきありがとうございました。</p>
</h1>
  <h2>下記お答えいただけますと幸いです☆</h2>
   <p>お題はぶっちゃけやってみたい技術についてです。</p>
   <p>下記プルダウンメニューから選択して、ボタンをクリックしてください</p>
<table>
  <form method="post" action="{{ url('/posts') }}">
   {{ csrf_field() }}
   <tr><th>やってみたい分野</th><td>{{Form::select('category', [ 'management' => 'management' ,'database' => 'database', 'network' => 'network', 'backend' =>'backend', 'frontend' =>'frontend'])}}</td></tr>
   <tr><th>バックエンド技術</th><td>{{Form::select('fulstack', ['Jsp' => 'Jsp', 'Laravel' => 'Laravel', 'Django' =>'Django', 'Express js' =>'Express js', 'RubyonRails' =>'RubyonRails','Play' =>'Play','Sym fony'=>'Sym fony', 'Cake PHP'=>'Cake PHP', 'Angular'=>'Angular'])}}</td></tr>
   <tr><th>フロントエンド技術</th><td>{{Form::select('frontend', ['React js' => 'React js', 'Vue.js' => 'Vue.js', 'Angular' =>'Angular','Ember js' =>'Ember js','boot strap' =>'boot strap'])}}</td></tr>
   <tr><th>使用しているSQL</th><td>{{Form::select('sqls', ['mysql' => 'mysql', 'sqlite' => 'sqlite'])}}</td></tr>
   <tr><th>使用したい言語</th><td>{{Form::select('gengo', ['Java' => 'Java', 'php' => 'php', 'C' =>'C', 'C++' =>'C++','C#' =>'C#','Ruby' =>'Ruby','Java script' =>'Java script','Python' =>'Python', 'Type cript' =>'Type cript', 'VBA' =>'VBA', 'VB' =>'VB', 'Scala' =>'Scala', 'Kotolin' =>'Kotolin','Swift' =>'Swift'])}}</td></tr>
   <tr><th>使用したいサービス</th><td>{{Form::select('serveres', ['SAKURA' => 'SAKURA', 'CONOHA' => 'CONOHA', 'AZURE' =>'AZURE', 'AWS' =>'AWS','GCP' =>'GCP'])}}</td></tr>
   <tr><th>使用しているOS</th><td>{{Form::select('os', ['WINDOWS' => 'WINDOWS', 'MACBOOK' => 'MACBOOK', 'Ubuntu' =>'Ubuntu', 'Centos7' =>'Centos7','Hyperv' =>'Hyperv','Soralis' =>'Soralis','Linuxmint' =>'Linuxmint'])}}</td></tr>
     <input type="submit" value="押してね！！">
</form>
</table>
@endsection

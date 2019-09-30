@extends('layouts2.default')

@section('content') 
    <div id="main_visual">
      <p><img src="/img2/main_visual.jpg"></p>
    </div>
   　　　<h2><b>フレームワークについて</b></h2>
   <p>コードの記述を簡略化し、開発を効率良く早く進めるために行うアプリです</p>
   <p>特にPHPやRubyのようにコードが乱立するようなフレームワーク等では重宝されます。</p>
   <p>代表敵でメジャーなもののみ記載をさせていただきます</p>
   <p>近年ではSIERでも使用している企業はあるとかないとか・・・実体は不明ですが。</p>
   
   <p><a href="DATA.html">プログラミング言語の動向について</a></p> 
   
  <div class="slideshow">
    <div><img src="img/spring.png" alt=""></div>
    <div><img src="img/Laravel.jpg" alt=""></div>
    <div><img src="img/Django.png" alt=""></div>
    <div><img src="img/Rails.jpg" alt=""></div>
  </div>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/app.js"></script>
 </body>
 @endsection
@extends('layouts2.default')

@section('content') 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script> 
  <canvas id="myChart"></canvas>
 	
		<h4>言語別における求人割合</h4>
		<p>PHPは、世界で広く使われているオープンソースの汎用スクリプト言語であるが、新規サービスを立ち上げる際、 RubyやPython等のほうが記述量が少ないため、採用されやすくなってきた。</p>
		<p>平成16年度の調査開始以来シェアは減少していたがLaravelの登場でどのようになるかわからなくなった。</p>
		<p><a href="https://ja.wikipedia.org/wiki/Laravel">Laravel について</a></p> 
		<p>Pythonに関しては、人工知能やディープラーニングなど先端技術での注目度が高く、Webアプリケーションのサーバサイド開発にDjangoを使用するケースが増えているようです。
		C／C++は、IoTやドローン制御などで採用される模様</p>
        <p><a href="/Info">各業界をそれぞれ振り返る</a></p>
		<svg id="myGraph"></svg>
		<script src="/js2/sample.js"></script>
@endsection

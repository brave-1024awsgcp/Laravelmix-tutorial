@extends('layouts3.default')

@section('content') 
        <div class="contentWrapper">
            <canvas id="chart">
            </canvas>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
               <script src="/js11/main.js"></script>
             </div>
             <p>git hubスターについて</p>
             <p>上記のグラフはgit hubスターにより、判明した去年までの情報である。</p>
             <p>どうやら、LaravelとVueは相性がいいのか、よく求人で見かける。フロントエンドの実装などでは使いやすいのかもしれない。</p>
             <p>AngularはJavascritptのフレームワークではないので要注意</p>
       　　　<p>※正しくはTypescritpt</p>
          <div class="slideshow">
           <div><img src="img/typescript.jpg" alt=""></div>
          <div><img src="img/Angular.jpg" alt=""></div>
          <div><img src="img/React.jpg" alt=""></div>
       　<div><img src="img/Laravelmix6.jpg" alt=""></div>
           </div>          
          <table border ="1" align="center">
                    <tr>
                           <td></td>
                           <th>Vue.js</th>
                           <th>Angular</th>
                           <th>React</th>

                    </tr>

                    <tr>
            　　　　　　　 <th>環境構築難易度</th>
                           <td>☆☆</td>
                           <td>☆☆☆☆</td>
                           <td>☆☆☆</td>
                    </tr>

                     <tr>
            　　　　　　　 <th>技術難易度</th>
                          <td>☆☆</td>
                          <td>☆☆☆☆</td>
                          <td>☆☆☆</td>
                    </tr>

                    <tr>
                   　　　<th>Cssとの相性</th>
                   　　　　<td>☆☆☆</td>
                     　　　<td>☆☆</td>
                     　   <td>☆</td>

                   </tr>
            　　　　<tr>
            　　　　　　　 <th>情報の充実度合</th>
                           <td>☆☆☆☆☆</td>
                           <td>☆☆☆☆</td>
                           <td>☆☆☆</td>
                    </tr>

            　　　　<tr>
            　　　　　　　 <th>成長度</th>
                           <td>☆☆☆☆☆</td>
                           <td>☆☆☆☆</td>
                           <td>☆☆☆</td>
                    </tr>
                    </table>                       
         </div>
　    </div>
   </div>              
    <script src="/js10/jquery-3.1.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js10/slick.min.js"></script>
    <script src="/js10/main.js"></script>
    <script src="/js10/app.js"></script>
   <a href="/backend">backendへ</a>  
   @endsection
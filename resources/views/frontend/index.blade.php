<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>ウェブフレームワーク</title>
<link rel="stylesheet" href="/css/style1.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" media="screen" />
</head>
 <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">データベース</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/backend" class="nav-link">サーバー</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/frontend" class="nav-link">ウェブフレームワーク</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link">コメント</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/index" class="nav-link">コメント履歴</a></li>
  </ul>
  </nav>
  　<h2></h2>
   <section id="Framework">
        <div class="contentWrapper">
            <canvas id="chart">
            </canvas>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
               <script src="/js2/main.js"></script>
             </div>
             <p>git hubスターについて</p>
             <p>上記のグラフはgit hubスターにより、判明した去年までの情報である。</p>
             <p>どうやら、LaravelとVueは相性がいいのか、よく求人で見かける。フロントエンドの実装などでは使いやすいのかもしれない。</p>
             <p>AngularはJavascritptのフレームワークではないので要注意</p>
       　　　<p>※正しくはTypescritpt</p>
          <div class="slideshow">
           <div><img src="/img/typescript.jpg" alt=""></div>
          <div><img src="/img/Angular.jpg" alt=""></div>
          <div><img src="/img/React.jpg" alt=""></div>
       　<div><img src="/img/Laravelmix6.jpg" alt=""></div>
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

         
        <div class="slideshow">
           <div><img src="img/gl1.jpg" alt=""></div>
           <div><img src="img/gl2.jpg" alt=""></div>
           <div><img src="img/gl3.jpg" alt=""></div>
           <div><img src="img/gl4.jpg" alt=""></div>
        </div>
        
        <table border ="1" align="center">
                    <tr>
                           <td></td>
                           <th>Rails</th>
                           <th>Laravel</th>
                           <th>Django</th>
                           <th>Express</th>
                    </tr>

                    <tr>
            　　　　　　　 <th>インストール難易度</th>
                           <td>☆☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆☆☆☆☆</td>
                           <td>☆</td>
                    </tr>

                     <tr>
            　　　　　　　 <th>migrationでの自動コード生成量</th>
                          <td>☆☆☆☆☆</td>
                          <td>☆☆☆</td>
                          <td>☆☆</td>
                          <td>☆☆</td>
                    </tr>

            　　　　 <tr>
            　　　　　　　 <th>相性の良いデータベースツール</th>
            　　　　　　　　<td>SQLite</td>
              　　　　　　　<td>SQLite</td>
              　　　        <td>SQLite</td>
                           <td>Mysql</td>
                    </tr>

                    <tr>
                   　　　<th>ツールVERSION競合</th>
                   　　　　<td>少ない</td>
                     　　　<td>多い</td>
                     　   <td>多い</td>
                          <td>なし</td>
                   </tr>
            　　　　<tr>
            　　　　　　　 <th>情報の充実度合</th>
                           <td>☆☆☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆☆☆</td>
                           <td>☆</td>
                    </tr>

                    <tr>
                    　　 <th>実際のコード記述量</th>
                         <td>☆</td>
                         <td>☆☆</td>
                         <td>☆☆☆</td>
                         <td>☆☆</td>
                    </tr>

            　　　　<tr>
            　　　　　　　 <th>AWSとの相性</th>
                           <td>☆☆☆</td>
                           <td>☆☆</td>
                           <td>？</td>
                           <td>？</td>
                    </tr>
            </table>

            <p>ここまで記載してきたことは悪魔でも個人的な見解です。実際の難易度は人によって異なるかもしれません。ただjavascriptの成長と進化は早いです。今後新しいフレームワークの誕生を期待しています。</p>   
                    <a href="http://127.0.0.1:8000/posts/create">コメントへ</a>
        </div>
      </div>
  </section>
</div>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/slick/slick.min.js"></script>
    <script src="/js/app.js"></script>
 </body>
</html>
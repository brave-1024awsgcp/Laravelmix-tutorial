<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/style1.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" media="screen" />
  </head>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">データベース</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/serverservice" class="nav-link">サーバー</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/frontend" class="nav-link">フレームワーク1</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/backend" class="nav-link">フレームワーク2</a></li>
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
              <script src="/js4/main.js"></script>
            </div>
            　<h1>三大フレームワークについて（Laravel）</h1>
             <p></p>
            <p>Laravelは私も使用しているものの、使い勝手は良くなりつつある</p>
            <p>フロントエンドの実装などは普通のHTMLとCSSで実装できるため、難易度は低い。</p>
            <p>※但し動的セレクトボックスを実装する時は記述が自由になりすぎる</p>
            <p>勢いは最もあるものの、どこかで勢いが止まる可能性もある</p>
            <p>今後は・・・</p>
　　　  　  <p>Expressは環境構築程度で実際に触ったことはない。</p>
  　 　　　 <p>javascriptでサーバーサイドまでをという面では勢いもありそうだが・・・今は不明</p>
  　　      <p>Djangoはというと元々pythonが機会学習での使用がメインであったり、どうか・・・</p>
  　　      <p>近年良く聞くが、フロントエンド面に関しての不安がよぎる</p>
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
            <p>ここまで記載してきたことは悪魔でも個人的な見解です。</p>
            <p>実際の難易度や将来性等は人の価値観によって異なります。</p>
　　　　　 <p>また、golangやkotolin等の技術の成長も期待しています。</p>
      <a href="http://127.0.0.1:8000/posts/create">コメントへ</a>
    </section>           
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="css/slick/slick.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/app.js"></script>
 </body>
</html>
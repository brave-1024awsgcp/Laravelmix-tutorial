
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>IT業界の技術比較:データベース</title>
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
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
    <section id="database">
        <div class="contentWrapper">
            <div class="flex">
                <div class="flexcontent">
                    <figure>
                        <img src="img/to01.png" alt="">
                        <figcaption>ＭySQL</figcaption>
                    </figure>
                    <p><b>メリット</b></p>
                    <p>複数のデータベースを1つのサーバ上に作成できる。データの読み取りは、検索された時点で行われる。行(Row)レベルで参照可能なロックをかけて、待ち時間が低減できる。管理や開発の効率化のための多彩なツールを備える。OracleMasterなどのオラクル認定資格がある。</p>
　　　　　　　　　　　<p><b>デメリット</b></p>
　　　　　　　　　　　<p>他のRDBMSへの移行に注意が必要、仕組みが違うため。コストが高い。トランザクションが自動的に開始されてしまう。DDL（データ定義言語）やDCL（データ制御言語）の実行後にコミットが自動的に行われる。パスワード等を設定する手間が発生する</p>
                </div>
                <div class="flexcontent">
                    <figure>
                        <img src="img/to02.png" alt="">
                        <figcaption>SQlite</figcaption>
                    </figure>
                    <p><b>メリット</b></p>
                    <p>動作が軽い。著作権がない。ファイルが1つだけなので、バックアップや復元が簡単。サーバ側でデータベースを用意する必要がない。設定が容易である</p>
　                  <p><b>デメリット</b></p>
                    <p>パスワードが存在しないため、セキュリティに難がある。複数の同時書き込みができない。書込がダブると書込エラーになる。バージョン２と３でデータベースの互換性がない。<b>総じて、個人の開発にはどうやら向いていそうだ</b></p>
                </div>
                <div class="flexcontent">
                    <figure>
                        <img src="img/to03.png" alt="">
                        <figcaption>myadmin</figcaption>
                        <p>表示の関係上myadminと記載したが正式名称は<b>phpmyadmin</b>である。メリットとデメリットを記載していく。</p>
                    </figure>
                    <p><b>メリット</b></p>
                    <p>SSHを開く必要がなく設定も不要。mysqlの細かい構文を使わなくても、使用できる。またどのような構文だったのかもとある機能を使えばSQL文を発行できる</p>
                    <p><b>デメリット</b></p>
                    <p>Apachを稼働させていなければならないため、データが溜まると若干動作がおそくなる。Mysqlでのパスワードの設定をさらに細かく設定する必要がある。</p>
                </div>
            </div>
        </div>
        <a href="http://127.0.0.1:8000/backend">サーバーサービスへ</a>
    </section>
            </div>
        </div>
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>


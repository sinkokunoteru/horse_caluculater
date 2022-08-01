<?php
  require_once(ROOT_PATH.'Controller/SimpleProbability.php');
  $cal = new SimpleProbability();
  $probability = $cal->mainProcess();
 ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" text="text/css" href="./css/top_page.css">
    <link rel="stylesheet" text="text/css" href="./css/reset.css">
    <title>馬券種別確率計算くん</title>
  </head>
  <body>
    <!-- ヘッダー -->
    <?php include(ROOT_PATH.'Views/header.php');?>
    <!-- ヘッダーここまで -->
    <div class="contents_position">
      <div class="tweet_ad_how_block">
        <div class="left_contents">
          <div class="how_to_use_box">
            <p class="how_to_use_title">このサイトの使い方</p>
            <p>競馬初心者の方、</p>
            <p>競馬を毎週やっている人への</p>
            <p>コミュニティサイト！</p>
            <p>自分の気になるレース、</p>
            <p>自分なりの予想をみんなで</p>
            <p>共有して更に競馬を</p>
            <p>楽しんでいこう!</p>
          </div>
          <div class="ad1">
            <a href="https://px.a8.net/svt/ejp?a8mat=3NEVKM+7FBNEA+1JS2+6X21T" rel="nofollow">
            <img border="0" width="400" height="300" alt="" src="https://www24.a8.net/svt/bgt?aid=220723798449&wid=001&eno=01&mid=s00000007229001162000&mc=1"></a>
          </div>
        </div>
        <div class="right_contents">
          <div class="twitter_contents">
            <div class="twitter_descript">
              <p id="twitter_news">新着情報&ensp;</p>
              <p id="twitter_hash_tag_info">#@@でツイート</p>
            </div>
            <div class="tweet_view">
              <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="topic_board">
        <p id="topic_header">話題の掲示板</p>
        <div class="topic_box">
          <div class="topic_block">
            <p class="topic_title">競馬に人生かけてみた</p>
            <p class="topic_date">2022/07/24</p>
            <a><img width="300" height="250" src="./images/uma_1.jpg"></a>
          </div>
          <div class="topic_block">
            <p class="topic_title">競馬に人生かけてみた</p>
            <p class="topic_date">2022/07/25</p>
            <a><img width="300" height="250" src="./images/uma_2.jpg"></a>
          </div>
          <div class="topic_block">
            <p class="topic_title">競馬に人生かけてみた</p>
            <p class="topic_date">2022/07/26</p>
            <a><img width="300" height="250" src="./images/uma_3.jpg"></a>
          </div>
        </div>
      </div>
      
    </div>
    <div>
  </body>
</html>

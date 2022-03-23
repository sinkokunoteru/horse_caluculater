<?php
  require_once(ROOT_PATH.'Controller/SimpleProbability.php');
  $cal = new SimpleProbability();
 ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
     <meta charset="utf-8">
     <title>馬券種別確率計算くん</title>
  </head>
  <body>
    <form method="POST" action="./index.php">
      <p>出馬数を入力してください</p>
      <input type="text" name="number_of_runners" id="number_of_runners">
      <input type='submit'>
    </form>
    <p>出馬数<?= $cal->horses?>匹の場合<p>
    <p>単勝</p>
    <p id="output_result"><?=$cal->tanshou()?></p>
    <p>複勝</p>
    <p id="output_result"><?=$cal->fukushou()?></p>
    <p>枠連</p>
    <p id="output_result"><?=$cal->wakuren()?></p>
    <p>馬連</p>
    <p id="output_result"><?=$cal->umaren()?></p>
    <p>馬単</p>
    <p id="output_result"><?=$cal->umatan()?></p>
    <p>ワイド</p>
    <p id="output_result"><?=$cal->wide()?></p>
    <p>3連複</p>
    <p id="output_result"><?=$cal->sanrenpuku()?></p>
    <p>3連単</p>
    <p id="output_result"><?=$cal->sanrentan()?></p>
 </body>
</html>

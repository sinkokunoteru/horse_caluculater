<?php
  require_once(ROOT_PATH.'Controller/SimpleProbability.php');
  $cal = new SimpleProbability();
  $probability = $cal->mainProcess();
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
    <?php foreach($probability as $key => $result): ?>
      <p><?=$cal->buykinds[$key]?></p>
      <p id="output_result"><?=$probability[$key]?></p>
    <?php endforeach; ?>
 </body>
</html>

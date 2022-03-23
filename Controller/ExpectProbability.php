<?php
class ExpectProbability {

  // 期待値を返す
  // $odd オッズ
  // $invest 掛け金
  // $probability 単純確率
   public function caluculate_expect($odds,$invest,$probability){
    return $odd*$invest*$probability;
  }

  //
}
?>

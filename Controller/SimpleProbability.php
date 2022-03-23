<?php
class SimpleProbability {

  //送信された値を格納
  public function __construct() {
    if(isset($_POST['number_of_runners'])) {
      $this->horses = $_POST['number_of_runners'];
    }else{
      exit;
    }
  }

  //単勝の確率計算
  public function  tanshou() {
    return $1/$this->horses;
  }

  //複勝の確率計算
  public function fukushou() {
    if($this->horses >= 8) {
      $C = $this->Combination($this->horses, 3);
    }else if($this->horses >= 5) {
      $C = $this->Combination($this->horses, 2);
    } else {
      $result = "販売がありません";
    }
    return $result;
  }

  //枠連計算
  public function wakuren() {
    if($this->horses >= 9) {
      $result = $this->Permutation(2,2)/$this->Combination($this->horses,2);
    }else{
      $result = "販売がありません";
    }
    return $result;
  }

  //馬連計算
  public function umaren() {
    if($this->horses >= 3) {
      $result = $this->Permutation(2,2)/$this->Combination($this->horses,2);
    }else{
      $result = "販売がありません";
    }
    return $result;
  }

  //馬単計算
  public function umatan() {
    if($this->horses >=3) {
      $result = 1/$this->Permutation($this->horses,2);
    }else{
      $result = "販売がありません";
    }
    return $result;
  }

  //ワイド
  public function wide() {
    if($this->horses>=4) {
      $result = $this->Combination(3,2) / $this->Combination($this->horses,3);
    }else{
      $result ="販売がありません";
    }
    return $result;
  }

  //3連複
  public function sanrenpuku() {
    if($this->horses >=4) {
      $result = 1/$this->Combination($this->horses,3);
    }else{
      $result = "販売がありません";
    }
    return $result;
  }

  //3連単
  public function sanrentan() {
    if($this->horses >=4) {
      $result = 1/$this->Permutation($this->horses,3);
    }else{
      $result = "販売がありません";
    }
    return $result;
  }

  //順列計算 nPr
  public function Permutation($n,$r) {
    $num = 1;
    for($i=0; $i<$r; $i++) {
      $num = $num * ($n - $i);
    }
    return $num;
  }

  //組み合わせ計算 nCr
  public function Combination($n,$r) {
    //分子・分母の初期値
    $num = 1;
    $den = 1;
    for($i=0; $i<$r;$i++) {
      $num = $num * ($n - $i);
      $den = $den * ($i+1);
    }
    return $num / $den;
  }

  // 少数を%に変換し少数第二位以下切り捨て
  public function convert_percent($double) {
    return round($double * 100,2);
  }
}
?>

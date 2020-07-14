<?php
 
 //課題1
 function twice($num){
     return $num * 2;
 } 
 echo twice(8000);
 echo ',';
 
 //課題2
 function f($a, $b){
  $rsult = ($a + $b);
  return $rsult;
 }
 echo f(9, 5);
 echo ',';
 
 //課題3
 function mul( $arr ) {
  $result = 1;
  foreach ( $arr as $ar ) {
   $result *= $ar;
  }
  return $result;
 }
 echo mul( array( 1, 3, 5, 7, 9));
 echo ',';
 
 //課題4
 function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
   if ($max_number < $a) {
    $max_number = $a;
   }
  }
  return $max_number;
 }
 echo max_array(array(900,7,5000,3,1,80));
 echo ',';
 
 //課題５
 // strip_tags — 文字列から HTML および PHP タグを取り除く
 $text = '<p>Test</p> <h1>practice</h1>';
 echo strip_tags($text);
 //array_push — 一つ以上の要素を配列の最後に追加する
 $num = array(1, 2);
 array_push($num, 3, 4);
 print_r($num);
 //array_merge — ひとつまたは複数の配列をマージする
 $array1 = array();
 $array2 = array(1 => "practice");
 $result = array_merge($array1, $array2);
 print_r($result);
 /*time — 現在の Unix タイムスタンプを返す
   mktime — 日付を Unix のタイムスタンプとして取得する*/
 date_default_timezone_set('UTC');
 echo time();
 echo ',';
 echo mktime(0, 0, 0, 7, 14, 2020);
 echo ',';
 //date — ローカルの日付/時刻を書式化する
 echo date('l jS \of F Y h:i:s A');
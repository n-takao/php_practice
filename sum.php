


<?php
function tax($cim){
    
   return $cim * 2;
    
}
echo tax(10);
echo "\n";

function f($a,$b){
    
    return $a+$b;
}
echo f(10,20);
echo "\n";

function pop($arr){
    $result=$arr[0];
    // 配列の要素一番目の値へ
    
  for($i=0; $i<count($arr); $i++){
    //  ループした配列の2番目から掛け算するのかも・・・。
      $result*=$arr[$i];
  } 
  return $result;
  
}
// 決まっていた配列の引数を入れてやるのか？
echo pop(array(1,3,5,7,9));
echo "\n";

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number<$a){
    //  ループした配列中で大きな値を探す？
     $max_number=$a;
   }
  }

 return $max_number;
 }
 
 echo max_array(array(5,9,6,3,10,19,30,7,8));
 echo "\n";
 
 $text="<h1>中村　高雄</h1>
 
 <p>会社員</p>";
//  ここから　問、5
 echo strip_tags($text);
 echo "\n";
 
 $pet=array("レン","みゅう");
 
 array_push($pet,"ぶん子","まるちゃん");
 
 print_r($pet);
 
 echo "\n";
 
 $array=array(1,2,"三",);
 
 $array2=array("四","五",7,8);
 
 $array3=array(9,10,11,12);
 
 $result=array_merge($array,$array2,$array3);
 print_r($result);
 
 echo"\n";
 
//  time,mktimeさっぱり分かりません。

//  dateこれもどのように理解するかが糸口掴めません。

// いずれも時刻を便利に表示する関数のようですが、難しいです。
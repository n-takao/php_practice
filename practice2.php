<?php
echo 'hello php!';

echo "\n";

$name="takao";

if($name=="takao"){
    
    echo "わたしの名前はたかおです";
    
}
else{
    echo "わたしの名前ではありません";
}

echo "\n";

$total=0;

for($i=1; $i<=10000; ++$i){
    
    $total +=$i;
    
}
echo $total;

echo "\n";

$hurits=array("banana", "kiwi", "orenge", "apple", "grape");

foreach($hurits as $hurit){
    echo "果物は". $hurit;
    echo "\n";
    
}


$start=0;
$end=100;

for($i=$start; $i<=$end; $i++){
    
    if($i%5==0){
        echo $i;
        echo "\n";
    }
}
$reslut=true;
if($reslut==true){
    
    
    
    echo "成功";
    
    
}
else{
    echo "不成功";
}

$varue=20;

$reslut=$varue==20;

var_dump ($reslut);


$varue=30;

$reslut=$varu>60;
var_dump($reslut);

$varue=5;

++$varue;

echo $varue;

$height=190;

if($height<150){
    
    echo "体重が150㎏以上なら乗れません";
}
    else if($heigiht<150){
        echo "体重が190㎏以下でも乗れません病院いきです";
    }
 else{
     echo "検査を受診してください";
 }
 
 $varue="ちあき";
 
 echo $varue . "たかお";
 
 $reslut=30;
 
 $varue=$reslut>50;
 var_dump($varue);
 
 $weight=60;
 if($weight<50){
     echo "体重が50キロまでの日人は右側にお入りください";
 }
     
     else if($weight>70){
         echo "体重が70キロ以上の人は左側に入ってください";
     }
         else{
             echo "どうぞ合格です入隊です";
             
             
         }
 
 $work="火曜日";
 
 switch($work){
     case"monday":
         echo "mondayは休日です";
         break;
    case "火曜日":
        echo "クソ仕事";
        break;
    case "水曜日":
        echo "出張";
        break;
        
 }
 echo "\n";
      $total=0;
      echo $total;
  for($i=0; $i<=100; $i++){
      $total += $i;
      
  } 
  echo $total;
  echo "\n";
  
  $total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
?>
<?php


function sum(){
    
    $result=0;
    
    for($i=0; $i<=10; $i++){
        
        $result+=$i;
        
    }
    
    return $result;
}
   echo sum();
?>
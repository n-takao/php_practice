<?php
$array=["2020","2019","2018","2017"];


echo $array["2"];

// 論理演算

$varue=20;

$result=$varue==30;

var_dump($result);

$varue=50;

$total=$varue==30;

var_dump($total);

echo "\n";



$result=30;

$total=$result>90;

var_dump($total);



$a=50;
$b="50";
$kkkk=$a==$b;

var_dump($kkkk);


$value=20;

++$value;

echo $value;


$value=60;


--$value;

echo $value;
echo "\n";

$value="quick";

$value  .= "silver";

echo $value;


$value=60;

if($value<50){
    
    echo "降水確率が60%以上なら傘をお持ちください";
    
}
else{
    
    echo "60%以下なら折りたたみ傘で間に合うでしょう";
    
}

echo "\n";

$result=55;

// γ―GTPが55以上ならアルコールは控えましょう、またγ―GTPが100の値を超えたら禁酒です。
if($result<50){
    


echo "肝機能の数値が高ければ病院に行きます";

}
else if($value==55){
    echo "γ―gtpが高いようだとアルコールは控えましょう";
    
}
else{
    echo "少しぐらい飲んでも大丈夫です";
}

$x=20;
if($x>10){
echo'$xは10より大きい';
}
//結果　$xは10より大きい
echo "\n";

$coin="表";
switch($coin){
case 0:
echo "表";
break;
case 1:
echo "裏";
break;
default:
echo"エラー";
break;
}


echo "\n";


$sample = "1";
switch($sample){
case true:
    echo 'これはtrueです'."\n";
    break;
case 1:
    echo 'これは数値の1です'."\n";
    break;
default:
    echo 'これは1ではありません'."\n";
    break;
}
'<br/>';

$bag=array("財布","眼鏡","傘","携帯電話","化粧品ポーチ");

foreach($bag as $box){
    


echo "中身は".$box;
echo "\n";


}

 
$start = 5;

$end = 100;

 for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
   if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

function sum($max){
    
    $result=0;
    
    for($i=1; $i<=$max; $i++){
        
        $result+=$i;
    }
    return $result;
    
    }
    
    
 echo sum(100);
 
 function bub($max){
     
     return $max * 2;
 }
  echo bub(5);
  
  $a=5;
  $b=5;
  
  function pip($a,$b){
      
      return $a+$b;
  }
 echo pip(5,5);
 echo "\n";
 
 function bab($arr){
     $result=$arr[0];
     foreach($arr as $a){
      $result *=$a;   
     }
     return $result;
 }
 echo bab(array(1,3,5,7,9));
 
 echo "\n";
 
   function max_array($arr){
 
  $max_number = $arr[0];
  foreach($arr as $a){
 
  if($max_number<$a){
      $max_number=$a;
  }
 }

  return $max_number;
  }
 echo max_array(array(20,50,60,10,3,9,8));
 echo"\n";
 
 
 
 
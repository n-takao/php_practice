<?php
echo 'hello php!';

$animals = [
    "cat" => "猫",
    "bird" => "鳥",
    "dog" => "犬"
    ];
    
    echo $animals["cat"];
    
    echo "\n";
    
    $result=true;
    
    // もし＄resultがtrueであれば、成功しましたが表示される。
    //そうでなければ、失敗しましたと表示される。
    if($result==true){
        echo "成功いたしました";
        }
        else{
            echo "失敗しました。";
            
        }
    //条件分岐//
    
    //身長が１８０㎝より小さい場合は乗車を拒否する。//
    
    $height=180;
    
    if($height<150){
        echo "150CM未満の方はご乗車できませんごめんなさい。";
        
    }
    echo "\n";
    $height=180;
    
    //もし$heightが１８０未満の数値なら、ifのあとの｛｝のコードが実行される。
    //それ以外なら、elseのあとの{}の中が実行される。
    
    if($height<150){
        echo "150㎝未満の方はご乗車できません。";
    }
    else{
        echo "150㎝以上ならご乗車できます。";
    }
    //体重が48㎏以上ならアイスは食べれません。
    $weight=49;
    
    if($weight<48){
       echo  "アイスは食べれません但し朝早くジョギングをするなら";
        
    }
    else{
        echo "食べてもいいよ";
        
    }
    echo "\n";
    
    $height=190;
    
    if($height<150){
        echo "ご入場できません";
    }
    else if($height>=200){
        echo "200㎝以上の方はご入場できません";
    }
    else{
        echo "ご入場できます";
    }  
    //    
        echo "\n";  
        $weather=30;
        
        //もし降水確率が50％以上なら雨で傘を持つ。
        //20％未満なら晴なので傘はいらない。30％なら曇りなので特に傘はいらない。
        if($weather<20){
            echo "降水確率が50％以上なら雨なので傘をお持ちください";
        }
        
        else if($weather>30){
            echo "降水確率は30％です。晴れのち曇りです";
        }
        else{
            echo "傘は特にいらないでしょう";
        }
        
        $weekday="月曜日";
        
        //$weekdayが月曜日なら「可燃ごみの日です」　水曜日なら「資源ごみの日です」　　
        //それ以外の日は回収はありません。//
        
        switch($weekday){
            case "月曜日":
              echo "可燃ごみの日です";
              break;
            
            case"水曜日":
                echo "資源ごみの日です";
                break;
                
                default :
                echo   "回収はありません";
                break;
         }
         echo "\n";
         
         $hospital="火曜日";
         
        //火曜日が病院へ行く日です//
        
        switch($hospital){
            case "月曜日":
             echo "仕事の日です";
             break;
            case "水曜日と木曜日":
             echo "農園へのお手伝いの日です";
             break;
            case "火曜日":
             echo "病院へ行く日AM 9:00 ";
             break;
                        
                
         }
         
 echo "\n";
 
 $sex="日曜日";
 
 switch($sex){
 case "月曜日":
     echo "休憩の日です";
     break;
     
     case "土曜日":
         echo "デートの前日です";
         break;
    case "日曜日":
     echo "本番の日です";
    break;
    default:
    echo "早く眠る日です";
    break;
     
    break;
    default:
    echo "早く眠る日です";
    break;
    
                 
                 
         }
    echo "\n";
    
    for($i=0;$i<50;$i++){
        echo $i;
    }
    echo "\n";
    $total=0;
    
    echo $total;
    
    for($i=0; $i<=100; $i++){
        echo $i;
    }
    // echo $total;
    echo "\n";
    
    $total=0;
    
    for($i=0; $i<=100;$i++){
        $total +=$i;
    }
    echo $total;
    
    
    
    
    
    $hulits = array("apple", "orage", "kiwi");
    
    foreach($hulits as  $hulits){
        echo "要素は" .  $hulits;
        echo "\n";
    }
    
    echo"\n";
    
    
    $i=1;
    $end=100;
    
    
    for($i=1; $i<=$end; $i++ ){
        
        if($i % 5==0){
         
    
            
        }
    echo $i;
    echo "\n";   
        
    }
    
    $total=0;
    echo $total;
    
    for($i=0; $i<=100; $i++){
        
        $total+=$i;
        
    }
   echo $total;
   echo "\n";
   $fruits = array("apple", "orenge", "banana");
   echo count($fruits);
   echo "\n";
   
   for($i=0; $i<count($fruits); $i++){
       
       echo $fruits[$i];
       echo "\n";
   }
   
   $box=array(10,20,30,40,50,60);
   
   for($i=0; $i<count($box); $i++){
       
       echo $box[$i];
       echo "\n";
       
   }
   $boxx=array(10,20,30,40,50,100,120);
   
   foreach($boxx as $cox){
       
       echo $cox;
       echo "\n";
       
   }
   
   
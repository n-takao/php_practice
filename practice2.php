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

foreach($hurits as $hurits){
    echo "果物は". $hurits;
    echo "\n";
    
}



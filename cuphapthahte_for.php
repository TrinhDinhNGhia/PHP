<?php

// 3 cú pháp thay thế for

for ( $i = 1;$i<=10;$i++){
    echo $i.'<br/>';
}
echo '<br/>';
//thay thế
for ( $i = 1;$i<=10;$i++):
    echo $i.'<br/>';
endfor;



/*

Cú pháp thay thế while

*/

$i=1;
while($i<=10){
    echo $i.'<br/>';
    $i++;
}

//thay thế
 $i=1;
 while($i<=10):
echo $i.'<br/>';
$i++;
 endwhile;

 //5 Cú pháp thay thế foreach 
 $dataArr=[
     'item1',
     'item2'
 ];
 foreach ($dataArr as $item){
     echo $item.'<br/>';
 }

 //thay thế
 foreach($dataArr as $item):
 echo $item.'<br/>';
endforeach;
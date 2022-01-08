<?php
// Vẽ tam giác sao với N dòng 

$n=5;
for($row =1; $row<=$n ;$row++ ){
    for ( $col=1 ; $col <=$row ;$col++ ){
        if($col<$row){
            echo '* ';
        }else{
            echo '*';
        }  
    }
    echo '<br/>';
   
}

/* VẼ tam giác đối xưng với N*2 dòng

*/
echo 'Tam giác đối xứng';
echo '<br/>';
$n=5;
for($row =1; $row<=$n ;$row++ ){
    for ( $col=1 ; $col <=$row ;$col++ ){
        if($col<$row){
            echo '* ';
        }else{
            echo '*';
        }  
    }
    echo '<br/>'; 
}
for($row =$n; $row>=1 ;$row-- ){
    for ( $col=1 ; $col <=$row ;$col++ ){
        if($col<$row){
            echo '* ';
        }else{
            echo '*';
        }  
    }
    echo '<br/>';
   
}


/*
Vẽ tam giác tăng dần với N dòng 
*/
echo 'Vẽ tam giác tăng dần với N dòng';
echo '<br/>';
$n=10;
$count = 0;
for ( $row =1 ;$row<=$n ;$row++){
    for ( $col=1 ; $col <=$row ;$col++ ){
        $count++;
        if( $col<$row){
            echo $count.' ';

        }else{
            echo $count;
        }
    }
    echo '<br/>';
   
}

?>

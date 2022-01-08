<?php
$i =1;
while( $i<=10){
    echo 'Vòng lặp thứ '.$i.'<br/>';
    $i++;

}

echo '<br/>';
/* Ví dụ tính tông : S=1+2+3+4+..+n */
$n =9;
$i =1;
$total =0 ; //giả định bằng 0
while ($i<=$n){
    $total+=$i;
    $i++;
}
echo 'Tổng = '.$total.'<br/>';
?>
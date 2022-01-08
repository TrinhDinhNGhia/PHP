<?php
$count =20;

$start =0;
for( $i=$start; $i <=$count; $i+=2)
{
    echo ' Anh xin lỗi em '.$i .'</br>';
}
echo '<hr/>';



// Tính tổng s= 1+2+4+..+n;
$n=10;
$s=0;
for($i=1;$i<=$n;$i++)
{
    $s+=$i; //S=s+i
    
}

echo'Tổng s = '.$s;
<?php
/*
1 Hiển thị số chẵn ,số lẻ trong dãy số từ 1 ,2 ,4,5...100
*/

$startIndexx =1;
$endIndex =100;

$reultEven =null; //Số chẵn
$reult0dd =null; //số lẻ


$eventCount =0 ;//Đếm số chẵn
$oddCount =0 ;//Đếm số lẻ
for( $index= $startIndexx; $index<=$endIndex;$index++){

    // Kiểm tra số chẵn
    if($index % 2==0){
        // echo $index.'Là số chẵn <br/>';
        $reultEven.=$index.' ';
        $eventCount++;
    }
    else{
        // echo $index.'Là số lẻ <br/>';
        $reult0dd.=$index.' ';
        $oddCount++;
    }
}

echo 'Tìm thấy'.$eventCount. 'Số chẵn : '.$reultEven. '<br/>';
echo 'Tìm thấy'.$oddCount. 'Số lẻ : '.$reult0dd. '<br/>';

echo '<br/> ';
// Bảng cửu chương
?>
 Bảng cửu chương

<table border="1 " width="100%">
    <?php
    for( $i =1;$i<=10; $i++){
        echo '<td>';
        for( $j=1; $j<=10;$j++){
            echo$i.'x'.$j.'='.$i*$j .'<br/>';
        }
        echo '</td>';
    }
    ?>

</table>



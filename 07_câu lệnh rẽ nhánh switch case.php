<?php

/*
Kiểm tra thứ trong tuần
$number =1 =>chủ nhật
$number =2  thứ 2
$number =3 thứ 3
$number =4 thứ 4
$number =5 thứ 5
$number =6 thứ 6
$number =7 thứ 7




*/

$number =4;
switch ($number){
    case 1:
        
        echo 'Hôm nay là chủ nhật';
        break;
    case 2:
          
        echo 'Hôm nay là thứ hai ';
        break;
    case 3:
        echo 'Hôm nay là thứ ba ';
        break;
    case 4:
         echo 'Hôm nay là thứ tư ';
        break;
    case 5:
        echo 'Hôm nay là thứ năm ';
        break;
    case 6:
        echo 'Hôm nay là thứ sáu ';
        break;
    case 7:
            echo 'Hôm nay là thứ bảy ';
        break;

    default:
    echo 'KHông hợp lệ';
    break;
}

echo '</br>';

/* 
KIểm tra số ngày trong tháng 
input:Nhập tháng,năm
output:đưa ra số ngày trong tháng

tháng 31 ngày :1 ,3 ,5,7,8,10,12
tháng 30 ngày :4,6,9,11
tháng có 28,29 ngày :tháng 2
*/

$month =9;
$year =2021;

switch($month){
    case 2:
        if($year %4 ==0){
            echo'Tháng '.$month.'Có 29 ngày';

        }else{
            echo 'tháng '.$moth.'có 28 ngày'; 
        }
    break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo 'tháng'.$month.'Có 30 ngày' ;
    break;

    default:
    echo 'tháng'.$month.'Có 31 ngày ' ;
    break;
}

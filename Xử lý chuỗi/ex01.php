<?php
// Chuỗi là gì 
// Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép

$exStr ='Học lập trình PHP';
var_dump($exStr);
echo '<br/>';

$exStr ="Học lập trình PHP";
var_dump($exStr);

echo '<br/>';

$exHtml ='<p><a href="https://unicode.vn">Unicode</a></p>';
echo $exHtml;



const _Ex_HTML ='<h3>Học lập trình php</h3>';
echo _Ex_HTML;

echo '<br/>';

/*Nguyên tacwcs làm việc với chuỗi */
$exStr ="Trung tâm đào tạo \"Unicode\" Hà nội";
echo $exStr;


echo '<br/>';




$exHtml= '<p><a href="https://unicode.vn">Unicode</a></p>';
echo _Ex_HTML;

echo '<br/>';

/*Nối chuôi  */
// Để nối chuỗi trong pho dùng dấu chấm (.);

$selecHTML ='<select name ="category"';
for ($i= 2000; $i<=2021;$i++){
    $selecHTML.='<option value="'.$i.'"> Năm'.$i.'</option>';
}
$selecHTML.='</select>';
echo $selecHTML;

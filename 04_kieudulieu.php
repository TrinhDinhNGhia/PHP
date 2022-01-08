<?php
// 1.kieu Int: $ten_bien=so_nguyen;
// ép kiểu (int)$ten_bien;
//kiem tra so nguyen: is_int($ten_bien)hoặc is_integer($ten_bien)

//Khai báo
$age=30.5;


 //ép kiểu
//  $age=(int)$age;
 // kiem tra kieu so nguyen 
//  $check= is_int($age);
$check=is_integer($age);
//  var_dump($check);

 // 2.Kiểu dữ liệu booblean(logic)
//   Khai báo kiểu dữ liệu :$ten_bien=giá trị Booblean;(true hoặc false)
//   Ép kiểu dữ liệu :(bool)$ten_bien;hoặc (boolean)$ten_bien;
//   Các kí tự :0, trống , nulll để qui đinh vè false,ngược lại là true
//   Kiểm tra biến kiểu Boolean:is_bool($ten_bien)

$check=1;
$check=(bool)$check;
// $checkBool=is_bool($check);
var_dump($check);

// 3 Kiểu số thực (float)
$fee=10;
 (float)$fee;
// var_dump($fee);
// echo'</br>';
// var_dump(is_float($fee));

//4.Kểu dữ liệu chuooix (String)

$mesage=25;
$mesage=(string)$mesage;
$checkString=is_string($mesage);
// var_dump($mesage);
// echo'</br>';
// var_dump($checkString);

// 5 kiểu mang 
// khai áo:$ten_bien=array();
// Ép kiểu mảng:(array)$ten_bien;
// Kiểm tra kiểu mảng :is_array($ten_bien);
$carArr=[];
$carArr=(array)$carArr;
$checkArr=is_array($carArr);
// var_dump($carArr);
// echo'</br>';
// var_dump($checkArr);


//6. dữ liệu Null
//  khai báo :$ten_bien=null;
//  ép kiểu sang int=> ;
//  ép kiểu sang String =>Rỗng
//  Ép kiểu sang Booblean=>false
//  Kiểm tra kiểu Null:is_null($ten_bien);
$total=null;
$total =(string)$total;
$checkNull=is_null($total);
// var_dump($total);
// echo'</br>';
// var_dump($checkNull);


// 7. kiểu dữ lieuj Resource
// Kiểu dữ liệu đặc biệt , nó lưu trữ tham chiếu đên scacs hàm-tài nguyên bên ngoài PHP ;File,Curl, database
// Kiểm tra kiểu resource:is_resource($ten_bien)


$curl=curl_init();

var_dump($curl);
echo'</br>';

// 8.Kiểu đối tượng
// Kiểu dữ liệu này sẽ được lưu trữ dữ liệu và ách xửu lý dữ liệu đó 
$dataCustomer=[
    'Trịnh Nghĩa'
];
// $dataCustomer=(object)$dataCustomer;//Ép kiểu
$check0bject=is_object($dataCustomer);
// var_dump($dataCustomer);
// echo'</br>';
// var_dump($check0bject);

$customer0bject=new stdClass();
$customer0bject->age=30;
var_dump($customer0bject);

/*
*Phân biệt emty và null
*
**/
$mesage1=null;//Rỗng
$mesage2='';// trống
var_dump($mesage1);
echo'</br>';
var_dump($mesage2);


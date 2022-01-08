<?php 
/* 1 toán tử 3 ngôi
2. cú pháp thay thế if
3. cú pháp thay thế for
4. cú pháp thay thế while 
5.cú pháp thay thế foreach 
*/
 $number =10 ;
//   if ($number== 10 ){
//        echo 'Bạn đủ tuổi';
//   }else{
//       echo'Bạn không đủ tuổi';
//   }

//   // 1. Toán tử 3 ngồi
// echo '<br/>';
//   echo $number==10?'Bạn đủ tuổi ':'Bạn không đủ tuổi';

$printStr = $number==10?'Bạn đủ tuổi':'Bạn không đủ tuổi';
// var_dump($printStr);

/*
*Cú pháp 
*bieu_thuc_dieu_kien?ket_qua_dung:ket_qua_sai
*LƯu ý
*-TOán tủ 3 ngôi phải gắn 1 biết thwucs (Gán,echo)
*-LUôn luôn phải có kết quả sai(Nếu không muốn hiển thị thì là: false,null,trống(''))
*/

$printStr =$number==10?'Bạn đủ tuổi ':null;
echo $printStr;

/*2. Cú pháp thay thế if

*/
if ($number==10){
    ?>
    <h3>Tiêu đề 1</h3>
    <h4>Tiêu đề 2</h4>
    <p>Nội dung đoạn văn</p>
    <?php
}else{
    ?>
    <p>Không hợp lệ</p>
    <?php

}
// cú pháp thay thế

 if ($number==10):
?>
 <h3>Tiêu đề 1</h3>
    <h4>Tiêu đề 2</h4>
    <p>Nội dung đoạn văn</p>
<?php
else:
?>
 <p>Không hợp lệ</p>
<?php
endif;

//
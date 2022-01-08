<?php
for ($i=1;$i<=10;$i++){
    echo $i.'<br/>';
    if($i==5){
        break;// Thoát khỏi vòng lặp
    }
}

echo '<br/>';
for( $i=1; $i <=10 ;$i++){
   if($i==5)continue; // BỎ qua vòng lặp 
    echo $i.'<br/>';
}

/* Die và exit  */

//die('KẾt thúc');  dừng cả chương trình phía dưới
// exit();

/*  
 Sự khác nhau ext: nguồn gốc từ ngôn ngữ C++
 die :NGuồn gốc từ ngôn ngữ lập trình perl
*/
echo '<p>Học lập trình PHP<p>';
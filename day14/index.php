<?php 

function  NumberOf1($n){
    //十进制转成二进制
   $num = decbin($n);
   $m=0;
   for($i=0;$i<strlen($num);$i++){
      if($num[$i] == 1){
      	$m++;
      }
   }
   return  $m;
}

echo  NumberOf1(10);

 ?>
<?php 


//函数封装
function  test($n){
   $sum = 0;

   $n && $sum = $n+test($n-1);

   return  $sum;

}

echo  test(5);

 ?>
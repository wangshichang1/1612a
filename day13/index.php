<?php 

$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

function  test($arr_A,$arr_B){
   
   $arr = array_merge($arr_A,$arr_B);


     sort($arr);

     return $arr;

}

print_r(test($arr_A,$arr_B));

 ?>
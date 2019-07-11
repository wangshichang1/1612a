<?php 

$arr = [1,2,3,4,5,6];
//函数定义
function  test($arr){

   //自定义数组
	$left = [];
	$right = [];

	for($i=0;$i<count($arr);$i++){
       
       if($arr[$i] %2 == 0){

       	 $left[] = $arr[$i];
       }else{
       	 $right[] = $arr[$i];
       }
	} 

  return  array_merge($right,$left);
}

echo "<pre/>";
print_r(test($arr));

 ?>
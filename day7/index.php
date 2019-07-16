<?php 

//函数定义
function test($arr){
  
  //循环判断
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++){
			for($k=0;$k<3;$k++){
			   if($arr[$i]!=$arr[$j] && $arr[$j]!=$arr[$k] && $arr[$i]!=$arr[$k]){
			      $array[] = $arr[$i].$arr[$j].$arr[$k];
			   }
			}
		}
	}

	sort($array);
   //返回值
 return  $array[0];
}
$arr = [3,32,321];
echo  test($arr);

 ?>
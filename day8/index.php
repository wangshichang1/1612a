<?php 

//函数定义
function test($arr){

  $keys = array_count_values($arr);
   
  asort($keys);
  // print_r($keys);
  $data = array_keys($keys);
  // print_r($data);
  return  [$data[0],$data[1]];
}
 // test([2,4,3,6,3,2,5,5]);
$arr = [2,4,3,6,3,2,5,5];
$result =  test($arr);

print_r($result);


 ?>
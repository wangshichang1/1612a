<?php 

//函数定义
function  calFn($n,$m){
   
  $arr = [];
   
  for($i=$n;$i<=$m;$i++){

  	  //将循环过后的内容放到数组中去
  	 $arr[] = $i;
  	 //数组分割字符串
  	 $str = implode($arr);
  }
 
 //返回值
  return  substr_count($str,"1");
}

//方法调用
echo  calFn(100,1300);

 ?>
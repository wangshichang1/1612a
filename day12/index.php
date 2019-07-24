<?php 

$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
function Find($array,$sum){
    $str = "";
   foreach ($array as $key => $value) {
   	  $str.=implode(",",$value);
   }
 
    $arr = explode(" ",$str);
    $x_arr = [];
   foreach ($arr as $key => $value) {
   	  $x_arr = explode(",",$value);
   }

   if(in_array($sum,$x_arr)){
   	  return   true;
   }
}

  var_dump(Find($array,2));
 ?>
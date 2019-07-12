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

// echo "<pre/>";
// print_r(test($arr));


$str = "45454545weqasdsa";
//统计字符串长度
// echo  strlen($str);
//统计某个字符在字符串中出现的次数
// echo substr_count($str,"4");
//截取字符串
 // echo   substr($str,0,8);
//字符串替换
// echo  substr_replace($str,"***",8,-2);
//小写
// echo strtolower($str);
//大写
// echo  strtoupper($str);
//首次出现位置
// echo  strpos($str,"a");
//最后一次出现
// echo  strrpos($str,"4");

$arr = ["a","b","c","d","e","f"];


$arr[1] = "1";

$arr[8]="sb";

// unset($arr[3]);
// print_r($arr);
 //弹出数组最后一个
// array_pop($arr);
//尾部添加一个元素
// array_push($arr,"a");
//开头添加一个元素
// array_unshift($arr,"k");
//弹出开头元素
// array_shift($arr);
// echo  "<pre>";
// print_r($arr);


$a = "abcdeddfd";
// echo $a;
 $c = "d";
for($i=strlen($a)-1;$i>=0;$i--){

     $b = "";
     $b.=$a[$i];

     echo  $b;
}


function cha($a,$c){
    
    $num = 0;
  for($i=0;$i<strlen($a);$i++){

      if($a[$i] == $c){
      	 $num++;
      }
  }

   return  $num;

}

// echo  cha($a,$c);



$str1 = "Hello World";


function   test2($str1){

   $len = strlen($str1);
   $kong = " ";
   $gang = "_";
   for($i=0;$i<$len;$i++){
    
    if($str1[$i] == $kong){
       $str1[$i] = $gang;
    }

   }

   return  strtolower($str1);
}

// echo  test2($str1);


// $str2 = "1221";

// echo  intval($str2/2)+1;
$str2 = "abcba";
function test3($str2){

  $len = strlen($str2);

  $left = "";
  $right = "";

  for($i=0;$i<$len;$i++){
  	 $left.=$str2[$i];
  }
  for($j=$len-1;$j>=0;$j--){
  	 $right.=$str2[$j];
  }

  if($left == $right){
  	   return   "是";
  }else{
  	   return   "不是";
  }
}

// echo  test3($str2);

//删除文件某一行数据
$file = fopen("aaa.txt","r");

$data = [];
if($file){
	while (($b=fgets($file,100))!== false) {
		 $data[] = $b;
	}
}
unset($data[9]);



// echo  "<pre>";
// print_r($data);
//重新写入
// file_put_contents("aaa.txt",$data);
  
//100以内和
//  $arr= [];
// for($i=1;$i<=100;$i++){
//     $arr[]=$i;
  
   
     
// }
 // echo array_sum($arr);



//2
function factorial($n){
if($n<0){
return "error";
}
if($n==0){
return 1;
}
return $n * factorial($n-1);
}
// 从-1 到9的阶乘
for($i=1;$i<10;$i++){
echo "$i!=".factorial($i)."<br>";
}

//文件切割
//搜索某个单词
$content = file_get_contents("aaa.txt");

$chastr = stripos($content,"yes");

if(!empty($chastr)){
	 echo  "有";
}else{
    echo   "没有";
}
// echo  $chastr;
$filelen = strlen($content);
$middel = floor($filelen/2);
$file1 = substr($content,0,$middel);
// echo  $file1;
 file_put_contents("file1.txt",$file1);
$file2 = substr($content,$middel,$filelen-$middel);
file_put_contents("file2.txt",$file2);
// echo  $file2;

//日考
function day6($n,$m){

 $arr = [];
 for($i=$n;$i<=$m;$i++){

    $arr[] = $i;
    $cha = implode($arr);

   
 }
 return  substr_count($cha,"1");
}

// echo  day6(100,1301);

?>

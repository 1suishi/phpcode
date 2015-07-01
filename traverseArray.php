<?php
/* 1使用 for语句循环遍历数组
    a 其他语句（只有这一种方式）
*   b. php  这种方式不是我们首选方式
    c数组必须是索引数组，而且下标还必须是连续的才能遍历
    （索引数组下标还可以不连续， 数组还有关联数组）
*2 使用foreach 语句循环遍历语句
  foreach(数组变量 as变量值)
  
  {
      //循环体
  }
  a 循环次数由数组的元素个数决定
  b //每次循环 都会将数组中的元素分别赋值给后面的变量
  foreach(数组变量as 下标变量=>值变量)

*3 while() list() echo 组合循环遍历数组
echo()函数 ，a需要一个数组作为参数；
b返回来的也是数组
c  返回来的数组是0,1,key value 四个下标（固定的）
   0 和 key下标是当前参数数组元素的键
   1和value下标是当前参数数组元素的值
d默认当前元素是一个元素 
e每执行一次后就会将当前元素向后移动
f如果到最后的元素在执行这个函数，则返回false
list()函数


 a. list()=array();需要将一个数组赋值给这个函数
b.这个数组中的元素个数要和list函数中的参数个数相同
c.数组中的每个元素值会赋值给list函数中的每个参数,list将买个参数转为变量
d .list只能接受索引数组
e 按照索引下标的顺序
*/

list($name,$age,$sex)=array("张三","10","nan");
//list(,,$sex)=array("张三","10","nan");
//list($name,,$sex)=array("张三","10","nan");
echo $name."<br>";
echo $age."<br/>";
echo $sex."<br/>";

  $ip="192.168.1.128";
   $ips=explode(".","$ip");
   print_r($ips);

   list(,,,$num2)=explode(".","$ip");
   
   
   echo $num2."<br/>";

$user=array(1,"张三","40","李四"=>"nan","abcd@sina.com" );

for($i=0;$i<count($user);$i++)
{
    //echo "\$user[{$i}]=".$user[$i]."<br/>";
}

foreach( $user as $key =>$val)
{
echo $key."=========>".$val."<br/>";
//echo $val."<br/>";
}



//三维数组的遍历 
$info=array(
        "user"=>array(
                //$user[0]
                array(1, "zansan", 10, "nan"),
                //$user[1]
                array(2, "lisi", 20, "nv"),    //$user[1]
                //$user[2]
                array(3, "wangwu", 30, "nan")
        ),
        "score"=>array(
                array(1, 100, 90, 80),
                array(2, 99, 88, 11),
                array(3, 10, 50, 88)
            ),
        "connect"=>array(
                array(1, '110', 'aaa@bbb.com'),
                array(2, '120', 'bbb@ccc.com'),
                array(3, '119', 'ccc@ddd.com')    
            )
    );


   foreach ($info as $tableName=>$table)
   {

    echo'<table  align="center" width="500" border="1">';
       echo'<caption><h1>'.$tableName.'</h1></caption>';
       foreach($table as $row )
       {

           echo'<tr>';
           foreach($row as $col )
               echo '<td>'.$col.'</td>';

               
           echo'</tr>';
       }
       
       echo'</table>';
   }
//使用数组的内部指针控制函数
//next(数组);
//prev(数组);
//reset(数组);
//end(数组);
//current(数组);
  $usedemo=array("id"=>1,"name"=>"zhangsan","age"=>10, "sex"=>"man"); 
 // each($usedemo);//array([1]=>1 [value]=1 [0]=>id [key]=>id);

while (list($key,$value)=each($usedemo))//array([1]=>1 [0]=1);
{
    echo $key."=======".$value."<br/>";
}
reset($usedemo);

 while (list($key,$value)=each($usedemo))//array([1]=>1 [0]=1);
{
    echo $key."=======".$value."<br/>";
}
reset($usedemo);
next($usedemo);
next($usedemo);
while (list($key,$value)=each($usedemo))//array([1]=>1 [0]=1);
{
    echo $key."=======".$value."<br/>";
}
echo"<br><br><br><br><br>";
reset($usedemo);

//print_r(current($usedemo));

while($arr=each($usedemo))
{
echo $arr[0]."=>".$arr[1]."<br/>";

echo $arr["key"]."----->".$arr["value"]."<br/>";
}

$a=each($usedemo);

var_dump($a);//Array ( [1] => 1 [value] => 1 [0] => id [key] => id )

$b=each($usedemo);
var_dump($b);

$c=each($usedemo);
var_dump($c);

$d=each($usedemo);
var_dump($d);

$e=each($usedemo);
var_dump($e);
?>
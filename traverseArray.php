<?php
/* 1ʹ�� for���ѭ����������
    a ������䣨ֻ����һ�ַ�ʽ��
*   b. php  ���ַ�ʽ����������ѡ��ʽ
    c����������������飬�����±껹�����������Ĳ��ܱ���
    �����������±껹���Բ������� ���黹�й������飩
*2 ʹ��foreach ���ѭ���������
  foreach(������� as����ֵ)
  
  {
      //ѭ����
  }
  a ѭ�������������Ԫ�ظ�������
  b //ÿ��ѭ�� ���Ὣ�����е�Ԫ�طֱ�ֵ������ı���
  foreach(�������as �±����=>ֵ����)

*3 while() list() echo ���ѭ����������
echo()���� ��a��Ҫһ��������Ϊ������
b��������Ҳ������
c  ��������������0,1,key value �ĸ��±꣨�̶��ģ�
   0 �� key�±��ǵ�ǰ��������Ԫ�صļ�
   1��value�±��ǵ�ǰ��������Ԫ�ص�ֵ
dĬ�ϵ�ǰԪ����һ��Ԫ�� 
eÿִ��һ�κ�ͻὫ��ǰԪ������ƶ�
f���������Ԫ����ִ������������򷵻�false
list()����


 a. list()=array();��Ҫ��һ�����鸳ֵ���������
b.��������е�Ԫ�ظ���Ҫ��list�����еĲ���������ͬ
c.�����е�ÿ��Ԫ��ֵ�ḳֵ��list�����е�ÿ������,list���������תΪ����
d .listֻ�ܽ�����������
e ���������±��˳��
*/

list($name,$age,$sex)=array("����","10","nan");
//list(,,$sex)=array("����","10","nan");
//list($name,,$sex)=array("����","10","nan");
echo $name."<br>";
echo $age."<br/>";
echo $sex."<br/>";

  $ip="192.168.1.128";
   $ips=explode(".","$ip");
   print_r($ips);

   list(,,,$num2)=explode(".","$ip");
   
   
   echo $num2."<br/>";

$user=array(1,"����","40","����"=>"nan","abcd@sina.com" );

for($i=0;$i<count($user);$i++)
{
    //echo "\$user[{$i}]=".$user[$i]."<br/>";
}

foreach( $user as $key =>$val)
{
echo $key."=========>".$val."<br/>";
//echo $val."<br/>";
}



//��ά����ı��� 
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
//ʹ��������ڲ�ָ����ƺ���
//next(����);
//prev(����);
//reset(����);
//end(����);
//current(����);
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
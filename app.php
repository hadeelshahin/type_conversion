<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //Type Juggling
   //1- Arithmitic Operation 
   $num1 =5;  //integer
   $num2 ='10'; //string
   $result= $num1+$num2;  //php converts the string to integer and apply add operation 
   echo $result ," ", gettype($result);
   echo "<br>", "============================================================================================","<br>";

    //2- string concatenation:
    $num3= 5;
    $str= "anyString";
    $result2= $num3 . $str;
    echo $result2;
  
    echo "<br>", "============================================================================================","<br>";
    //comparsions
    $str2= "anyString";
    $num4= 4;
    $result3= $str+$num4;
    echo $result3;
    echo "<br>", "============================================================================================","<br>";

    //echo "<br>", "============================================================================================";
    //boolean and strings
    //0 string & empty strinf will be false 
    $num5=0; 
    if($num5==$str){  //php will convert str to integer 0 
        echo "equal";
    }else{
        echo "not equal ";

    }
    
    echo "<br>", "============================================================================================","<br>";
//automatic type conversion 

$str="123abc";
$num6=(int)$str;
echo $num6;  //123

echo "<br>", "============================================================================================","<br>";



$str="abc123";
$num7=(int)$str;
echo $num7;   //0 so it just take the leading numeric numbers 

echo "<br>", "============================================================================================","<br>";
//convert to float and integer 
$str= "12.3abc";
$num8=(int)$str;
echo $num8;
echo "<br>", "============================================================================================","<br>";

$num9=(float)$str;
echo $num9;  //12.3

echo "<br>", "============================================================================================","<br>";
/**3.Boolean Conversion: 
Strings are converted to boolean false if they are empty ("") or the string "0".
All other strings are converted to true. */

$str = '0';
$bool1= (bool)$str;
//echo $bool1;
var_dump($bool1);

echo "<br>", "============================================================================================","<br>";
//using var_dump:

$int=123;
$str="hello";
$arr=array(1,2,3);
$bool=true;

var_dump($int);
var_dump($str);
var_dump($arr);
var_dump($bool);

echo "<br>", "============================================================================================","<br>";

//array to string 
$arr = array(1,2,3);
$str = (string)$arr;
echo $str;
echo "<br>";
var_dump($str);

?>
</body>
</html>
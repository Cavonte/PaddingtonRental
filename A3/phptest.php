<?php
$addnum=1+2;
 echo $addnum . "<br/>";
$addstr="php". "programming"; echo $addstr . "<br/>";
$inc = 5; echo $inc ."<br/>";
$inc = ++$inc; echo $inc ."<br/>";
$dec = $inc--; echo $dec. "<br/>";
echo $inc;
$result = "addnum:$addnum<br />"; echo $result. "<br/>";
$result .="addstr:$addstr<br />"; echo $result ."<br/>";
$result .="inc:$inc<br />"; echo $result."<br/>";
$result .="dec:$dec<br />"; echo $result ."<br/>";


echo (true and true)? "true <br/>":
"false";

 # loops in php
for($i=0;$i<5;$i++){
	echo "Hello" . '<br/>';
}	

$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed! <br/>");

$price = 100;
$item = "desk";
printf("The price of %4s is %4d", $item,
$price);

$output = "<p>Hello
World!</p>";
function hello1() {
// global $output;
print $output;
}
function hello2() {
print $output;
}
hello1();
hello2();

?>

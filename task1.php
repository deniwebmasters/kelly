<?php
$x=$_GET['x']?(int)$_GET['x']:1;
$y=$_GET['y']?(int)$_GET['y']:100;

for($i=$x;$i<=$y;$i++){
	if($i%3==0 && $i%5==0)
		$msg[]="FizzBuzz";
	elseif($i%3==0)
		$msg[]="Fizz";
	elseif($i%5==0)
		$msg[]="Buzz";
	else
		$msg[]=$i;
}

echo implode(" ", $msg);
?>
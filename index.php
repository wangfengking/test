<?php

$str = "00:12:12.16";
$time  = time($str);
$data = strtotime($str);
echo $time.'s';
echo "</br>";
echo  date('H:i',$data).'ms'; 
echo "</br>";
echo "Hello World";

?>

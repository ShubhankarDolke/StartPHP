<?php
$arr=array('a','b','c','d','e');
echo "<br>array=";
print_r($arr);
array_push($arr,'g');
echo "<br>array after inserting element=";
print_r($arr);
array_pop($arr);
echo "<br>array after deleting element=";
print_r($arr);
array_unshift($arr,'g');
echo "<br>array after inserting element in queue=";
print_r($arr);
array_shift($arr);
echo "<br>array after deleting element in queue=";
print_r($arr);
?>
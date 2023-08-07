
<?php
$arr=array('firstname'=>'mustafa','lastname'=>'bubai','city'=>'banswara');
print_r($arr);
echo "<br>size=".sizeof($arr)."<br>";
unset($arr['city']);
print_r($arr);
echo "<br>";
$arr=array_flip($arr);
print_r($arr);
echo "<br>";
shuffle($arr);
print_r($arr);

?>




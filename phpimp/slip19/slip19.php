<html>
<head>
<?php
if($_POST)
{
$no = $_POST["t1"];
$rev=0;
$dig=0;
$arr=array("zero","one","two","three","four");
while($no>0)
{
$dig=$no%10;
$rev=($rev*10)+($dig);
$no=(int)($no/10);
}
while($rev>0)
{
$dig=$rev%10;
echo " ".$arr[$dig];
$rev=(int)($rev/10);
}
}
?>
</head>

</html>
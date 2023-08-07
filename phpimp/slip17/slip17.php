<html>
<body>
<table border=1>
<?php
$n=$_POST["no"];
for($i=1;$i<=10;$i++)
{
echo "<tr>"; 
echo "<td>";
echo $n*$i;
echo "</td>";
echo"</tr>";
}
?>
</body>
</html>
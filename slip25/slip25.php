<?php
$email=$_POST['email'];

$arr=explode("@",$email);
print_r($arr);
if(count($arr)!=2)
echo "invalid";
else
{
$b=$arr[0];
if(ereg("^[a-zA-Z]+(\.[a-zA-Z0-9])*",$b))
{
    $a=$arr[1];
   
  if(ereg("^[a-zA-Z]+(\.[a-zA-Z0-9])+(\.[a-zA-Z])*",$a))
     {
     echo "valid";
     }
  else
     {
         echo "invalid";
      }
}
   else
         echo "invalid";
}
?>

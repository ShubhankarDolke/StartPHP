<html>
<body>
<?php
$ch=$_POST['choice'];
Switch($ch)
{
	Case 'sort with keys':$arr= array(500,100,400,200);
		               echo "Array is: ";
   		               print_r($arr);
		               echo"<br>";
		               echo "Sorted array by values in Ascending order with changing keys: ";
		               sort($arr);	
		               print_r($arr);
		               echo"<br>";
		               echo "Sorted array by values in Descending order with changing keys: ";
		               rsort($arr);	
		               print_r($arr);
		               break;
	Case 'sort value':echo "Array is: ";
		         $arr= array('e'=>300,'a'=>100,'b'=>400,'c'=>200);
		         print_r($arr);
		         echo "<br>";
		         echo "Sorted array by values in Ascending order without changing keys: ";
		         asort($arr);	
		         print_r($arr);
		         echo"<br>";
		         echo "Sorted array by values in Descending order without changing keys: ";
		         arsort($arr);	
		         print_r($arr);
		         break;
	Case 'find odd':  echo"Array is: ";
		        $arr=array(1,4,68,3,7,6,21,60,9,34,31);
		        print_r($arr);
		        $len=sizeof($arr);
		        $odd=array();
		        $k=0;
		        for($i=0;$i<$len;$i++)
		        {
			if($arr[$i]%2!=0)
			{
				$odd[$k]=$arr[$i];
				$k++;
			}
		        }
		        echo"<br> Odd array is: ";
		        print_r($odd);
		        break;
	Case 'sort glance':$arr1=array("Delhi","Mumbai","Chennai");
		           $arr2=array("Hyderabad","Kolkata","Gujrat");
		           echo" 1st array is: ";
		           print_r($arr1);
		           echo "<br> 2nd Array is: ";	
		           print_r($arr2);
		           array_multisort($arr1,$arr2);
		           echo"<br> After sorting both the arrays at a glance:<br> ";
		           print_r($arr1);
		           echo "<br>";
		           print_r($arr2);		         
		           break;
	Case 'merge' : $arr1=array("Delhi","Mumbai","Chennai");
		     $arr2=array("Hyderabad","Kolkata","Gujrat");
		     echo" 1st array is: ";
		     print_r($arr1);
		     echo "<br> 2nd Array is: ";	
		     print_r($arr2);
		     $arr3=array_merge($arr1,$arr2);
		     echo"<br> After Merging arrays: <br>";
		     print_r($arr3);
		     break;
	Case 'intersection':$arr1=array("Delhi","Mumbai","Chennai");
		            $arr2=array("Hyderabad","Mumbai","Delhi");
		            echo" 1st array is: ";
		            print_r($arr1);
		            echo "<br> 2nd Array is: ";	
		            print_r($arr2);
		            $arr3=array_intersect($arr1,$arr2);
		            echo"<br> After Intersection: <br>";
		            print_r($arr3);
		            break;
	Case 'union':$arr1=array("Delhi","Mumbai","Chennai","Bhopal");
		  $arr2=array("Hyderabad","Mumbai","Delhi","Pune");
		  echo" 1st array is: ";
		  print_r($arr1);
		  echo "<br> 2nd Array is: ";	
		  print_r($arr2);
		  $arr3=array_unique(array_merge($arr1,$arr2));
		  echo"<br> After Union: <br>";
		  print_r($arr3);
		  break;
	Case 'set diff' :$arr1=array("Delhi","Mumbai","Hyderabad","Chennai","Bhopal");
		  $arr2=array("Delhi","Mumbai","Hyderabad","Pune");
		  echo" 1st array is: ";
		  print_r($arr1);
		  echo "<br> 2nd Array is: ";	
		  print_r($arr2);
		  $arr3=array_diff($arr1,$arr2);
		  echo"<br>Set Difference of two arrays is: <br>";
		  print_r($arr3);
		  break;
}
?>
</body>
</html>
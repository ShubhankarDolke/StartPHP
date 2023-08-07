<html>
<body>
<?php
function vowel()
{
    $string = strtolower($_POST['str']);
        //all vowels in array
        $vowels = array('a','e','i','o','u');
        //find length of the string
        $len = strlen($string);
        $num = 0;
        $cnt_a=0;
	$cnt_e=0;
        //loop through each letter
        for($i=0; $i<$len; $i++)
        {
            if(in_array($string[$i], $vowels))
            {
                $num++;
                 if($string[$i] =="a")
		   $cnt_a++;
		 if($string[$i] =="e")
		   $cnt_e++;
            }
        }
        
        //output
         echo "Number of a : $cnt_a";
           echo "Number of e : $cnt_e";
        echo "Number of vowels : <span style='color:green; font-weight:bold;'>". $num ."</span>";
    
 
}

vowel();
?>
</body>
</html>
<html>
<body>
	<?php
	// 2x2 array
	$multiArray = array(array('a', 'b', 'c', 'd'),
                  array('m', 'n', 'o'),
	array('x', 'y', 'z', 'za'));

	// reading 2,3 element
	$value = $multiArray[2][3];
	echo "<p>Element at [2,3]: $value</p>";
	$value = $multiArray[1][1];
	echo "<p>Element at [1,1] before deletion: $value</p>";
	// deleting [1,1] element
	// delete
	unset($multiArray[1][1]);
	// reindex
                 $multiArray[1] = array_values($multiArray[1]);
	$value = $multiArray[1][1];
	echo "<p>Element at [1,1] after deletion: $value</p>";
                $array = array('c', 'ab', 'e', 'x', 'p', 'qq');
	$needle = 'e';
	// search for element value 'e'
	$foundIndex = search($array, $needle);
	if ($foundIndex != -1) 
	{
		echo "<p>'$needle' found in array at $foundIndex index</p>";
	}
	 else {
	   echo "<p>'$needle' not found in array</p>";
			}
	function search($array, $value) 
	{
	$foundIndex = -1;

	foreach($array as $i => $arrayValue) 
		{
			if ($arrayValue === $value) 
			{
			$foundIndex = $i;
			break;
			}
		}
			return $foundIndex;
			}
		?>
	</body>
</html>		





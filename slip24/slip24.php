
<html>

<head>

<title>Slip 22 Solution</title>
	
</head>
	
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$string1 = $_POST["string1"];
$string2 = $_POST["string2"];
$replacement = $_POST["replacement"];
$largeString = "";

$smallString = "";
if (strlen($string1) > strlen($string2)) 
{

$largeString = $string1;

$smallString = $string2;

} 
else 
{
$largeString = $string2;
$smallString = $string1;
}
echo "<p>Large String: $largeString</p>";
echo "<p>Small String: $smallString</p>";

findOccurrences($largeString, $smallString);
$stringWithReplacement = str_replace($smallString, $replacement, $largeString);
echo "<p>Large String after replacing '$smallString' with '$replacement': $stringWithReplacement</p>";
}
function findOccurrences($largeString, $smallString) 
{
$firstOccurrence = strpos($largeString, $smallString);
echo "<p>First Occurrence: $firstOccurrence</p>";
$lastOccurrence = strrpos($largeString, $smallString);
echo "<p>Last Occurrence: $lastOccurrence</p>";

$occurrenceCount = substr_count($largeString, $smallString);

echo "<p>No. of Occurrences: $occurrenceCount</p>";
		
}

?>


<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
	
<label>First String: <input type="text" name="string1"></label>

<br />

<label>Second String: <input type="text" name="string2"></label>

<br />

<label>Replace with: <input type="text" name="replacement"></label>

<br />

<input type="submit" value="Submit">

</form>

</body>

</html>		
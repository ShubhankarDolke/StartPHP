<html>
<head>
	<style type="text/css">
	.even
	{
		font-size: 12px;
		color: red;
	}
	.odd
	{
		font-family: "Times New Roman";
		font-size: 17px;
		color: yellow;
	}
	body
	{
		background-color: #000;
	}
	</style>
</head>
<body>
	<?php
	if($_GET){
		$n = (int)$_GET['number'];
		$even = 2;
		$odd = 1;
		for($i=0;$i<$n;$i++)
		{
		echo "<a class='even'>".$even."</a><br>";
			$even = $even+2;
		}
			echo "<br>";
		for($i=0;$i<$n;$i++)
		{
			echo "<a class='odd'>".$odd."</a><br>";
			$odd = $odd+2;
		}
	}
	?>
	
</body>
</html>
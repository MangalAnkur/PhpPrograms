
<html>
<head>
</head>
<body>
<form method="post" action="">
Tution fee : <input type="text" name="fee1"><br>
Travelling fee : <input type="text" name="fee2"><br>
Hostel fee : <input type="text" name="fee3"><br>
Mess fee : <input type="text" name="fee4"><br>
Library fee : <input type="text" name="fee5" ><br>
Id card fee : <input type="text" name="fee6" ><br>
Exam fee : <input type="text" name="fee7"><br>
Other fee : <input type="text" name="fee8"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
if($_POST)
{
	$a=$_POST['fee1'];
	$b=$_POST['fee2'];
	$c=$_POST['fee3'];
	$d=$_POST['fee4'];
	$e=$_POST['fee5'];
	$f=$_POST['fee6'];
	$g=$_POST['fee7'];
	$h=$_POST['fee8'];

	if(empty($a))
	{
		echo "Error! Tution Fee is mandatory ";
		echo "<br>";
	
   if(empty($e))
	{
		echo "Error! Library Fee is mandatory ";
		echo "<br>";
	
   if(empty($f))
	{
		echo "Error! Id Card Fee is mandatory ";
		echo "<br>";
	}
else if(empty($g))
	{
		echo "Error! Exam Fee is mandatory ";
		echo "<br>";
	}
	}}
	else
	{
		$total = $a+$b+$c+$d+$e+$f+$g+$h;
	echo "<br>Total fee : ".$total;
	}
	}
?>
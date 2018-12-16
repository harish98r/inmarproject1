<?php
session_start();
?>
<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
<?php
$v=$_SESSION["p"];
$a=$_POST['a'];
$b=$_POST['b'];
//echo $v;
$r=mysqli_connect("localhost","root","","inmar");
$sql="update " . $v . "fruits set price='$b' where fruitName='$a'";
$q=mysqli_query($r,$sql);
if($q)
	echo "updated";
else 
	echo "update failed";
//$c=mysqli_num_rows($q);
?>
</center>
</body>
</html>


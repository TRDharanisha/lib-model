<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["d"];
$d=$_POST["g"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"];
$con=mysql_connect("localhost","root","");
mysql_select_db("library");
mysql_query("insert into people(n,a,d,g,e,p,s)values('$a','$b','$c','$d','$e','$f','$g')");
$x= "THANKS FOR REGISTERING!!! ALWAYS WELCOME <br> @7896325418";
echo $x;
include("register.php");
mysql_close($con);
?>
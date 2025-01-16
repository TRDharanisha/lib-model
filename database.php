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
mysql_query("insert into reader(n,a,d,g,e,p,s)values('$a','$b','$c','$d','$e','$f','$g')");
echo("THANKS FOR REGISTERING!!! ALWAYS WELCOME @7896325418");
include("register.php");
mysql_close($con);
?>
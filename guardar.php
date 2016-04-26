<?php 
$ced=$_POST["ced"];
$nom=$_POST["nom"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$ped=$_POST["ped"];
$ele=$_POST["ele"];
$db=mysql_connect("localhost","root","");
mysql_select_db("pedidoscodalca",$db);
mysql_query("insert into pedidos values('$ced','$nom','$dire','$tel','$ped','$ele')");
?>

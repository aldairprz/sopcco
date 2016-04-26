<?php 
$ced=$_POST["ced"];
$nom=$_POST["nom"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$ele=$_POST["ele"];
$db=mysql_connect("localhost","root","");
mysql_select_db("pedidoscodalca",$db);
mysql_query("insert into clientes values('$ced','$nom','$dire','$tel','$ele')");
?>
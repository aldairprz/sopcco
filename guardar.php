<?php 
$ced=$_POST["ced"];
$nom=$_POST["nom"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$ped=$_POST["ped"];
$ele=$_POST["ele"];

$db=mysql_connect("127.0.0.1","root","usrio01");
mysql_select_db("pedidoscodalca",$db);
mysql_query("insert into pedidos values('$ced','$nom','$dire','$tel','$ped','$ele')");
?>


<html>
  <head>
    <title>Titulo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        <div class="col-md-4">
          <div class="well">
            <h1>Registro guardado</h1>
            <a href="pedidos.html">Registrar otro pedido</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

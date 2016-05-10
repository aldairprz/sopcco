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


<html>
  <head>
    <title>CODALCA</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>

      <style type="text/css">
        #escudo{
          width: 40px;
        }
      </style>

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
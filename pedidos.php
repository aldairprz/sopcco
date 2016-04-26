<html>
  <head>
      <style>
        p{text-align:justify;}
      </style>
    <title>CODALCA</title>

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
          <h1>PEDIDOS</h1>
            
            <form action="guardar.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="email" class="form-control" placeholder="Email" name="ced">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="email" class="form-control" placeholder="Email" name="ced">
              </div>   

              <button type="submit" class="btn btn-default">Submit</button>
           
<br>
              <div class="col-md-10">
                <label class="control-label" for="inputSuccess2">CEDULA</label>
                <input type="text" name="ced" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess2Status" class="sr-only">(success)</span>
              </div>
              
              <div class="col-md-10">
                <label class="control-label" for="inputSuccess2">NOMBRE Y APELLIDO</label>
                <input type="text" name="nom" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess2Status" class="sr-only">(success)</span>
              </div>
              
              <div class="col-md-10">
                <label class="control-label" for="inputSuccess2">DIRECCION</label>
                <input type="text" name="dire" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess2Status" class="sr-only">(success)</span>
              </div>
              
              <div class="col-md-10">
                <label class="control-label" for="inputWarning2">TELEFONO</label>
                <input type="text" name="tel" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                <span id="inputWarning2Status" class="sr-only">(warning)</span>
              </div>
              
              <div class="col-md-10">
                <label class="control-label" for="inputError2">PEDIDO</label>
                <input type="text" name="ped" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span>
              </div>
              
              <div class="col-md-10">
                <label class="control-label" for="inputError2">correo</label>
                <input type="text" name="ele" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span>
              </div>
              
              <div class="col-md-12">
              <p>
              </div>
              

              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-12">
                  <button type="submit" class="btn btn-detault">GUARDAR</button>
                </div>
              </div>
            
            </form>
        </div>


        <div class="col-md-8">
          <img src="codalca1.jpg" alt="" class="img-responsive">
          <hr>
          <div class="well">

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia velit dolores, reprehenderit. Id dolorem voluptas asperiores vel aperiam fugiat aliquid ab ipsa pariatur tenetur atque, laboriosam, unde. Repudiandae, quas? Illo.
            </p>
          </div>
        </div>



<!--               <div class"col-md-12">
                <img src="codalca1.jpg" alt="" class="img-responsive">
              </div>
 -->

      </div>
    </div>
    
    <script>
     $('.dropdown-toggle').dropdown();
   </script>
         
  </body>
</html>
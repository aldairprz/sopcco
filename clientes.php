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
          <h1>CLIENTES</h1>
            
            <form action="guardarclientes.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1">CEDULA</label>
                <input type="text" class="form-control" placeholder="" name="ced">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">NOMBRE Y APELLIDO</label>
                <input type="text" class="form-control" placeholder="" name="nom">
              </div>   

              <div class="form-group">
                <label for="exampleInputEmail1">DIRECCION</label>
                <input type="text" class="form-control" placeholder="" name="dire">
              </div>  

              <div class="form-group">
                <label for="exampleInputEmail1">TELEFONO</label>
                <input type="text" class="form-control" placeholder="" name="tel">
              </div> 

              <div class="form-group">
                <label for="exampleInputEmail1">CORREO</label>
                <input type="text" class="form-control" placeholder="@" name="ele">
              </div> 

              <button type="submit" class="btn btn-default">ENVIAR</button>
          
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
<?php



?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastro de Fornecedor</title>
  </head>
  
  <body>
<nav>
  <?php 
  include 'menu.php';
  
  ?>
</nav>


      
  <div  class="container">

  <div class="row">
  <div class="card border-light mb-3">
  <div class="card-header text-center display-3">Cadastro de Produto</div>
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  </div>
  </div>

  <form>

  <div class="row mt-5">
  <div class="mb-3 col-4">
    <label for="exampleInputEmail1" class="form-label">Produto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="forncedor">   
  </div>

  <div class="mb-3 col-2">
    <label for="exampleInputEmail1" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade">   
  </div>

  
  
<div class="row">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</div>
</form>


</div> <!--fim do container-->


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>



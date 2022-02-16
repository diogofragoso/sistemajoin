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
  

  <div class="card border-light mb-3">
  <div class="card-header text-center display-3">Cadastro de Fornecedores</div>
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  </div>
  </div>


  <div class="row">

  <div class="col-6">


<img src="img/fornecedor.jpg" alt="teste" style="width: 600px;">


</div>


<div class="col-6 align-self-center">

              <form  action="cad_fornecedor.php" method="post" >
                  
                  <div class="row mt-5">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fornecedor</label>
                        <input type="text" class="form-control" id="fornecedor" aria-describedby="nomeFornecedor" name="fornecedor">   
                      </div>
                  

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Cidade</label>
                          <input type="text" class="form-control" id="fornecedor" aria-describedby="cidadeFornecedor" name="cidade">   
                        </div>

                  </div>

                  <div class="row">
                        <div class="col-2">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>   


              </form>

  
</div>








  </div>



  
  
  
  




</div> <!--fim do container-->


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>



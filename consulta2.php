
<!doctype html>
    <html lang="pt-br">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <!-- Fontes -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Lista DB</title>

        <style>
           
        </style>   
      </head>
      <body>
            
    <!--Início do container-->
    <div id="menu">
      <?php include 'menu.php'; ?>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div id="div-top" class="col-10 mx-auto mt-3 display-3  text-center">
               Relação de produtos cadastrados    
            </div>
        </div>


      <table class="table mt-5 table-dark table-striped table-hover table-bordered ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação </th>
     
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>

<?php
$servername = "localhost";
$usernameBD = "root";
$password = "";
$dbname = "sistema";

// Create connection
$conn = new mysqli($servername, $usernameBD, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT p.id_produto, p.nome_produto, p.qtd_produto, p.preco_produto,f.nome_fornecedor FROM produto p INNER JOIN  fornecedor f on p.id_fornecedor = f.id_fornecedor";
$result = $conn->query($sql);

 if ($result->num_rows > 0) { 
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>

            <?php $id = $row ["id_produto"]; ?>
            <td> <?php echo $row ["id_produto"]; ?> </td>
            <td> <?php echo $row ["nome_produto"]; ?> </td>
            <td> <?php echo $row ["qtd_produto"]; ?> </td>
            <td> <?php echo $row ["preco_produto"]; ?> </td>
            <td> <?php echo $row ["nome_fornecedor"]; ?> </td>
            <td> 
                      
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-remover" onclick="setRemover(<?php echo $id ?>)">Remover</button>
                      <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-atualizar" onclick="setAtualizar()">Atualizar</button>
                      
            </td>
          

     

</tbody>




   <?php  } ?>
      <?php
 
          } else {
              echo "0 results";
                 }
                      $conn->close(); 
  
  
  ?>
</table>

 <!--MODAL REMOVER-->

 <div class="modal fade" id="modal-remover" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-center text-danger" id="staticBackdropLabel">Atenção! </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <h4 > O Produto será removido! </h4>

                          </div>
                          <div class="modal-footer">
                          <form method="post" action="remover_prod.php">
                      
                            <input  id="remover"type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"  name="id-prod"  style="display: none;">      
                            
                            <div>
                            
                            </div>


                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Remover</button>
                          </form>
                            
                          </div>
                        </div>
                      </div>
                    </div>
<!-- FIM MODAL REMOVER-->

<!--MODAL Atualizar-->

<div class="modal fade" id="modal-atualizar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-center text-danger" id="staticBackdropLabel">Atenção! </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <h4 > Atualizar produto </h4>

                          </div>
                          <div class="modal-footer">
                          <form method="post" action="atualizar_prod.php">
                      
                            <input  id="remover"type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"  name="id-prod"  style="display: none;">      
                            
                            <div>
                            <!-- Início do formulário -->
                                <div class="row">
                                      <form class=" g-3 needs-validation mt-5 " method="post" action="cad_prod.php">
                                        <div class="col-10">
                                          <label for="validationCustom01" class="form-label">Produto</label>
                                          <input id="nome" type="text" class="form-control" id="validationCustom01" placeholder="Sabão" value="" name="nome" required>
                                          
                                        </div>
                                        <div class="col-10">
                                          <label for="validationCustom02" class="form-label">Quantidade</label>
                                          <input id="qtd" type="text" class="form-control" id="validationCustom02" placeholder="50" name="quantidade" required>
                                          
                                        </div>
                                      
                                        <div class="col-10">
                                          <label for="validationCustom03" class="form-label">Preço</label>
                                          <input id="preco" type="text" class="form-control" id="validationCustom03"  placeholder="9.90" name="preco" required>                                      
                                        </div>
                                        <div class="col-10 mb-5">
                                          <label for="validationCustom03" class="form-label">Fornecedor</label>
                                          <input id="fornecedor" type="text" class="form-control" id="validationCustom03"  placeholder="Fornecedor" name="fornecedor" required>                                      
                                        </div>

                                        <!-- <div class="col-md-10">
                                          <label for="validationCustom04" class="form-label">Fornecedor</label>
                                          <select class="form-select" id="validationCustom04" name="fornecedor" required>
                                            <option selected disabled> Fornecedor </option>  
                                        </div> -->

                              <div class="row">
                            <button type="button" class="btn  btn-sm btn-secondary col-3" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn  btn-sm  btn-warning col-3" >Atualizar</button>
                            </div>
                          </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<!-- FIM MODAL atualizar-->



































</div> <!-- FIM DO CONTAINER --> 

    
        
                  <script>
                    function setRemover(id){
                             document.getElementById('remover').value = id;
                     
                    }

                    function setAtualizar(id,nome,qtd, preco, fornecedor){


                    }


                    
                    </script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        
      </body>
    </html>



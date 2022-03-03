<?php
session_start();

if(!isset($_SESSION["logado"])){
    // Usuário não logado! Redireciona para a página de login
    header("Location: index.php");
    exit;
    }
    
    if($_SESSION["nivel"] < 2){
      header("Location: navegacao.php");      
      
      }
      
    




?>

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

        <style>
            /* body{
                font-family: 'Roboto', sans-serif;
            } */
        </style>


    <title>Cadastro</title>
  </head>
  <body style="margin:0">

  <nav>
    <?php include 'menu.php'?>
  </nav>
  
  <div class="container"> <!--incicio do container-->

  <div class="col">
          
  <div class="card border-light mb-3">
                <div class="card-header text-center display-3"> Cadastro de Produtos</div>
                      <div class="card-body text-dark">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
               </div>
                </div>

    </div>  

<div class="row">

<div class="col-6">
<img src="https://image.freepik.com/vetores-gratis/ilustracao-do-conceito-de-pagina-online_114360-3899.jpg" alt="" srcset="">

</div>

<div class="col-6 align-self-center">
<!-- Início do formulário -->
<form class="row g-3 needs-validation mt-5 " method="post" action="cad_prod.php">
  <div class="col-md-10">
    <label for="validationCustom01" class="form-label">Produto</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Sabão" value="" name="nome" required>
    
  </div>
  <div class="col-md-5">
    <label for="validationCustom02" class="form-label">Quantidade</label>
    <input type="text" class="form-control" id="validationCustom02" placeholder="50" name="quantidade" required>
    
  </div>
 
  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Preço</label>
    <input type="text" class="form-control" id="validationCustom03"  placeholder="9.90" name="preco" required>
 
  </div>

  <div class="col-md-10">
    <label for="validationCustom04" class="form-label">Fornecedor</label>
    <select class="form-select" id="validationCustom04" name="fornecedor" required>
      <option selected disabled> Fornecedor </option>

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


$sql = "SELECT * FROM fornecedor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       
    $id = $row['id_fornecedor']; 
    $nomef = $row["nome_fornecedor"];   
    // echo "<option value='$nomef'>" . $row["nome_fornecedor"] .  "</option>";         
    echo "<option value='$id'>" . $nomef .  "</option>";         
  }

} else {
  echo "0 results";
}
$conn->close();

?>

      <!-- <option value="SP">SP</option>
      <option value="PR">PR</option>
      <option>...</option> -->
    </select>
  </div>

    
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>

</div>


</div> 
<!-- fim da linha -->

</div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>



































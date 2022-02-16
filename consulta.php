
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
    <div class="container-fluid">
            <div id="menu">
                <?php include 'menu.php'; ?>
            </div>

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
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   
    
    echo "<td>" . $row["id_produto"] .  "</td>";
    echo "<td>" . $row["nome_produto"] .  "</td>";
    echo "<td>" . $row["qtd_produto"] .  "</td>";
    echo "<td>" . $row["preco_produto"] .  "</td>";
    echo "<td>" . $row["nome_fornecedor"] .  "</td>";
    echo "</tbody>";
      
  }

} else {
  echo "0 results";
}
$conn->close();
?>

</table>

</div>

    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        
      </body>
    </html>



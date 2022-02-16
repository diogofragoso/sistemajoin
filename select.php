
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
            body{
                font-family: 'Roboto', sans-serif;
            }
            #menu{
                z-index: 1;
            }
            /* #div-top{
               border-style: solid;
               border-color: black;
            background-color: #777;
            } */
        </style>   
      </head>
      <body>
            
    <!--Início do container-->
    <div class="container-fluid">
            <div id="menu">
                <?php include 'index.php'; ?>
            </div>

        <div class="row">
            <div id="div-top" class="col-10 mx-auto mt-3 display-3  text-center">
                Clientes cadastrados    
            </div>
        </div>


      <table class="table mt-5 table-dark table-striped table-hover table-bordered ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Username</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Cep</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
$servername = "localhost";
$usernameBD = "senac";
$password = "senac";
$dbname = "cliente";

// Create connection
$conn = new mysqli($servername, $usernameBD, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   
    
    echo "<td>" . $row["id_user"] .  "</td>";
    echo "<td>" . $row["nome_user"] .  "</td>";
    echo "<td>" . $row["sobrenome_user"] .  "</td>";
    echo "<td>" . $row["username_user"] .  "</td>";
    echo "<td>" . $row["cidade_user"] .  "</td>";
    echo "<td>" . $row["estado_user"] .  "</td>";
    echo "<td>" . $row["cep_user"] .  "</td>";
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
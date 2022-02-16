<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nomef = $_REQUEST['fornecedor'];
    $cidadef = $_REQUEST['cidade'];

    if (empty($nomef) || empty($cidadef)) {
      echo "Campos vazios";

    } else {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $sql = "INSERT INTO fornecedor (id_fornecedor, nome_fornecedor, cidade_fornecedor)
            VALUES (null, '$nomef', '$cidadef')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script>window.confirm('Cadastro realizado com sucesso') </script>";
           
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
         
          
          $conn = null;
    }
    header("Location: fornecedor.php");
  }
  



?>










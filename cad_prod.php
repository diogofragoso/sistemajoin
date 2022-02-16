<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nome = $_REQUEST['nome'];
    $qtd = $_REQUEST['quantidade'];
    $preco = $_REQUEST['preco'];
    $fornecedor = $_REQUEST['fornecedor'];
    

    if (empty($nome) || empty($qtd) || empty($preco) || empty($fornecedor)) {
      echo "Preencha todos os campos antes de realizar o cadastro";

    } else {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $sql = "INSERT INTO produto (id_produto, nome_produto, qtd_produto, preco_produto,id_fornecedor)
            VALUES (null, '$nome', '$qtd','$preco','$fornecedor')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script>alert('Produto cadastrado com sucesso') </script>";
           
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
         
          
          $conn = null;
    }
    header("Location: produto.php");
  }
  



?>
<?php
$servername = "localhost";
$usernameBD = "root";
$password = "";
$dbname = "sistema";





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $qtd = $_REQUEST['quantidade'];
    $preco = $_REQUEST['preco'];
    $fornecedor = $_REQUEST['fornecedor'];
    

    if (empty ($id) || empty($nome) || empty($qtd) || empty($preco) || empty($fornecedor)) {
      echo "Preencha todos os campos antes de realizar o cadastro";

    } else {



                try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameBD, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $sql = "UPDATE produto SET nome_produto='$nome', qtd_produto=$qtd, preco_produto=$preco WHERE id_produto=$id";

                // Prepare statement
                $stmt = $conn->prepare($sql);

                // execute the query
                $stmt->execute();

                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " Registros atualizados com sucesso!";
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;




                    }
                    header("Location: consulta2.php");

}
?>

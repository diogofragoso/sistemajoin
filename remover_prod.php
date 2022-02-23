<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $id = $_REQUEST['id-prod'];
    
    

    if (empty($id) ) {
      echo "Não foi possível remover este produto";

    } else {

                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // sql para deletar item 
                    $sql = "DELETE FROM produto WHERE id_produto=$id";

                    // use exec() because no results are returne
                    $conn->exec($sql);
                    echo "Registro deletado com sucesso";
                    } catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                    }

                    $conn = null;
             }
              header("Location: consulta2.php");
}
    
?>
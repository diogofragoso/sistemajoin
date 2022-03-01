<?php

session_start();


?>


<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Valida user</title>
</head>

<body>

    <?php
    include 'conexao.php';
    ?>
    <?php
        // echo "<table style='border: solid 1px black;'>";
        // "<tr><th>id_user</th><th>login_user</th><th>nome_user</th><th>nivel_user</th><th>senha_user</th></tr>";
        
        class TableRows extends RecursiveIteratorIterator {
          function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
          }          
        
        }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $login = $_REQUEST['login'];
        $senha = $_REQUEST['senha'];

        if (empty($login) || empty($senha)) {
            echo "Campos vazios";
        } else {
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameBD, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM usuario WHERE login_user='$login' and senha_user='$senha'");               
                    
                $stmt->execute();
                $count=0;
                // Lista o resultado
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    //echo $v;
                    $count++; 
                  }
                  
                }
                catch(PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
                //Caso nenhum resultado seja listado o login e senha não conferem
                if($count > 0){
                  // echo "Login realizado com sucesso";
                  $_SESSION["logado"] = true;
                  $_SESSION["user"] = $login;
                  header("Location: navegacao.php");

               } else{ 
                      $_SESSION["logado"] = false;
                      echo $_SESSION["logado"];
                      header("Location: index.php");
                      
                     }


              }
    }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
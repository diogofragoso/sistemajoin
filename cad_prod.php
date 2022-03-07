<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


########## script para upload da imagem####################

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verificar se o arquivo é de fato uma imagem 
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Verificar se o arquivo já existe 
if (file_exists($target_file)) {
  echo "desculpe, O arquivo já existe!";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Desculpe, o arquivo é muito grande.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Desculpe, apenas arquivos JPG, JPEG, PNG & GIF  são  permitidos.";
  $uploadOk = 0;
}

// Verificar se  $uploadOk recebeu "0", representando um erro
if ($uploadOk == 0) {
  echo "Desculpe , seu arquivo não foi carragegado.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquvio ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi arquivado com sucesso!.";
    $nomeImg = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
  } else {
    echo "Desculpe, não foi possível fazer upload do arquivo.";
  }
}

############# FIM Do script para upload de imgaem  ####################

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
          
            $sql = "INSERT INTO produto (id_produto, nome_produto, img_produto, qtd_produto, preco_produto,id_fornecedor)
            VALUES (null, '$nome', '$nomeImg', '$qtd','$preco','$fornecedor')";
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
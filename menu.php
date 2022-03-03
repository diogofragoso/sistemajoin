




  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php" >Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
        
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a id="a-fornecedor" class="dropdown-item" href="fornecedor.php">Fornecedor</a></li>
            <li><a id="a-produto" class="dropdown-item" href="produto.php">Produto</a></li>
            <li><hr class="dropdown-divider"></li>           
            <li><a class="dropdown-item" href="consulta2.php">Consultar </a></li>  
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
       
      </ul>
      <a class="navbar-brand text-white d-flex" href="sair.php" >Nível [ <?= $_SESSION["nivel"]?> ]</a>
      <a class="navbar-brand text-white d-flex" href="sair.php" >Sair</a>
     
  </div> <!--fim do container-->
</nav>  


<?php

if($_SESSION["nivel"] < 3){

echo "<script>document.getElementById('a-fornecedor').style.display= 'none'; </script>" ;

}

if($_SESSION["nivel"] < 2){

echo "<script>document.getElementById('a-fornecedor').style.display= 'none'; </script>" ;
echo "<script>document.getElementById('a-produto').style.display= 'none'; </script>" ;

}




?> 


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

  <title>Home</title>
</head>

<body>


  
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  navbar-light bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


        </nav>
      </div>
      <!--fim da coluna-->
    </div>
    <!--fim da linha 1 -->
  <!-- Fim do container NAV-->

  <div class="container">


    <div class="col "></div>
    <form class="row g-3 precisa-validar mt-5" novalidate action="valida_user.php" method="post">

      <div class="row mt-2">
        <div class="col-md-4 mx-auto">
          <label for="validationCustom01" class="form-label">Login</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Burger" value="" name="login" required>
          <div class="valid-feedback">
            Campo preenchido!
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-4 mx-auto">
          <label for="validationCustom01" class="form-label">Senha</label>
          <input type="password" class="form-control" id="validationCustom01" value="" name="senha" required>
          <div class="valid-feedback">
            Campo preenchido!
          </div>
        </div>
      </div>

      <!-- 
          <div class="row mt-2">
        <div class="col-md-4 mx-auto">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Eu aceito os termos e condições.
            </label>
            <div class="invalid-feedback">
              Você deve aceitar os termos antes de enviar!
            </div>
          </div>
        </div>
        </div> -->


      <div class="col-md-4 mx-auto">
        <button class="btn btn-primary" type="submit">Entrar</button>
      </div>
    </form>



    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
  </div>


  </div>


  <script>
    (function() {
      'use strict'

      var forms = document.querySelectorAll('.precisa-validar')

      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
<?php

// include '../database/config.php';

// $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
// $res = $conn->query($sql);
// $row = $res->fetch_object();

// $conn->close();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/boostrap-icons/font/bootstrap-icons.css">
  <script src="../js/bootstrap.bundle.min.js"></script>
  <title>Projeto Web - Servidor</title>
</head>

<body class="d-flex flex-column min-vh-100  ">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" href="../../src/index.php" aria-selected="true" role="tab">Home</a>
    </li>
  </ul>
  <div class="container text-center">
    <h1 class="text-primary-emphasis">PERFIL</h1>
    <form id="emailForm" action="index.php" method="POST">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <label for="email" class="form-label text-start w-100">Endereço de E-mail</label>
          <div class="d-flex align-items-center">
            <input type="email" name="email" class="form-control me-2" id="email" disabled>
            <button type="submit" class="btn btn-warning btn-sm me-2">EDITAR
              <i class="bi bi-pencil"></i>
            </button>
            <button type="submit" class="btn btn-danger btn-sm">EXCLUIR
              <i class="bi bi-trash-fill"></i>
            </button>
          </div>
        </div>
      </div>
    </form>

  </div>
  <footer class="py-3 mt-auto">
    <div class="progress" style="height:5px">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
      </div>
    </div>
    <p class="text-center text-muted mt-3">© 2024 - L.J.A.S.</p>
  </footer>
  <script src="./perfil.js"></script>
</body>

</html>
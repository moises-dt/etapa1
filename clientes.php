<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Lista de Clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
    font-size: 3.5rem;
      }
  </style>
  <link href="css/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
  @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
  </style>
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Minha Empresa</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22">
                  </polyline>
                </svg>
                Dashboard 
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" href="clientes.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              Clientes
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lista de Clientes</h1>
      </div>
      <div class="text-right">
        <button type="button" class="btn btn-sm pt-1 pb-1 mb-3"><a href="cadcliente.php">Cadastrar +</a></button>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Endereço</th>
              <th>CPF</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
              <?php
                include 'php/conexao.php';
                $sql = "SELECT * FROM `cliente`";
                $consulta = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($consulta)){
                  $id = $array['id'];
                  $nome = $array['nome'];
                  $email = $array['email'];
                  $endereco = $array['endereco'];
                  $cpf = $array['cpf'];
              ?>
              <tr>
              <td><?php echo $id ?></td>
              <td><?php echo $nome ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $endereco ?></td>
              <td><?php echo $cpf ?></td>
              <td width ="120px"><a href="php/_editar_cliente.php?id=<?php echo $id ?>" role="button" class="btn btn-primary btn-sm"><img src="imagens/edit-24px.svg" width="15" height="15">&nbsp Editar</a></td>
              <td width ="120px"><a href="php/_excluir_cliente.php?id=<?php echo $id ?>" role="button" class="btn btn-danger btn-sm"><img src="imagens/delete_sweep-24px.svg" width="15" height="15">&nbsp Excluir</a></td>
            </tr>
            <?php } ?> 
        </table>
      </div>   

      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body></html>
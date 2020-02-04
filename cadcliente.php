<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Cadastro de Clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

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
        <h1 class="h2">Cadastro de Clientes</h1>
      </div>
      
      <div class="container">
        <form name="form" method="post" action="php/_inserir_cliente.php">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label>Nr Cliente</label>
              <input type="number" class="form-control" placeholder="Número do Cliente" disabled >
              </div>
              <div class="form-group col-md-10">
              <label>Nome</label>
              <input name="nome" type="text" class="form-control" placeholder="Digite o Nome do Cliente" required="">
              </div>
          </div>
          
          <div class="form-row">  
            <div class="form-group col-md-8">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com.br">
            </div>
            <div class="form-group col-md-4">
            <label>CEP</label>
            <input id="cep" name="cep" type="text" class="form-control" placeholder="Digite o CEP">
            </div>
          </div>
            
          <div class="form-row">  
            <div class="form-group col-md-10">
            <label>Endereço</label>
            <input id="logradouro" name="endereco" type="text" class="form-control" placeholder="Digite o Endereço">
            </div>
            <div class="form-group col-md-2">
            <label>Número</label>
            <input id="numero" name="numero" type="number" id="logradouro" class="form-control" placeholder="Digite o Número" >
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
            <label>Bairro</label>
            <input id="bairro" name="bairro" type="text" class="form-control" placeholder="Digite o Bairro">
            </div>
            <div class="form-group col-md-6">
            <label>Cidade</label>
            <input id="cidade" name="cidade" type="text" class="form-control" placeholder="Digite a Cidade">
            </div>
          </div>   

          <div class="form-row">
            <div class="form-group col-md-6">
            <label>Estado</label>
            <input id="uf" name="estado" type="text" class="form-control" placeholder="Digite o Estado">
            </div>
            <div class="form-group col-md-6">
            <label>CPF</label>
            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="Digite o CPF" onkeypress="$(this).mask('000.000.000-00');" required="">
            </div>
          </div>  
            <div style="text-align: right">
              <button type="submit" class="btn btn-success"><img src="imagens/save-24px.svg" width="15" height="15">&nbsp Cadastrar</button>
            </div>
        </form>
      </div>
    </main>
  </div>
</div>
  <script type="text/javascript"> 
    $("#cep").focusout(function(){
      $.ajax({ 
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        dataType: 'json',
        success: function(resposta){
          $("#logradouro").val(resposta.logradouro);
          $("#complemento").val(resposta.complemento);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#uf").val(resposta.uf);
          $("#numero").focus();
        }
      });
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
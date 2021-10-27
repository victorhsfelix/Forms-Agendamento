<!DOCTYPE html>
<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/index.js"></script>
        <title>Primeiro Projeto</title>
    </head>
    <body>
      <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
            <a class="navbar-brand" href="#">APLICATIVO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="consultarClientes.php">Consulta <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="editarClientes.php">Editar <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="row">
        <div class="card mb-3 col-12" style="width: 100%">
            <h5 class="card-title"><b>Agendamento de Vendas</b></h5>
            <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
          <p>
          <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
            <div class="form-group">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Nome:</label>            
              <input type="text" class="form-control" id="txtNome" required name="txtNome">
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Telefone:</label>
              <input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(XX)XXXXX-XXXX">
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Origem:</label>
              <select class="form-control col-sm-12" required name="txtOrigem" id="txtOrigem">
                <option>Celular</option>
                <option>Fixo</option>
                <option>Whatsapp</option>
                <option>Facebook</option>
                <option>Instagram</option>
                <option>Google Meu Negócio</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Data:</label>
              <input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1">Observações</label>
              <textarea class="form-control" id="txtObservacao" name="txtObservacao" rows="3"></textarea>
            </div>
            <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" id="btnInserir" class="btn btn-primary">CADASTRAR</button>
            </div>
          </div>
          </form>
          </p>
          </div>
      </div>
      </div>
    </body>
</html>

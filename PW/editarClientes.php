<?php
require_once("ControllerCadastro.php");
?>
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
        <script src="js/consulta.js"></script>
        <script src="js/editar.js"></script>
        <title>Primeiro Projeto</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                  <a class="nav-link" href="index.html">Agendamento <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="consulta.html">Consulta <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="excluir.html">Excluir <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
        </nav>
        <div class="card mb-3">
          <div class="card-body">
              <h5 class="card-title">Editar - Agendamento de Potenciais Clientes</h5>
              <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
              <?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar($_GET['id']);
							//print_r($resultado);
			  ?>
              <form method="post" action="ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['nome']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" required name="txtOrigem" id="txtOrigem">
									<option <?php if($resultado[0]['origem'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['origem'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['origem'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['origem'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['origem'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['origem'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato" value="<?php echo $resultado[0]['data_contato']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"><?php echo $resultado[0]['observacao']; ?></textarea>
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
						</form>
          </div>
      </div>
    </body>
</html>
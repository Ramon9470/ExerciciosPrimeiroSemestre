<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="_css/estilo_cad.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<form class="form-horizontal">
  <fieldset>
    <div class="panel panel-primary">
        <div class="panel-heading">Novo Usuário</div>

          <div class="col-md-11 control-label">
                  <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
          </div>
    </div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-5">
    <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text"><br>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
    <div class="col-md-2">
      <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$"><br>
    </div>
</div>

<label class="col-md-2 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)"><br>
  </div>

<div class="form-group">
  <label class="col-md-1 control-label" for="prependedtext">Telefone <h11>*</h11></label>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"OnKeyPress="formatar('## #####-####', this)"><br>
      </div>
    </div>
</div> 
<div class="form-group">
<label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
<div class="col-md-5">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
</div>
</div>
</div>

</div>

<div class="form-group">
<label class="col-md-2 control-label" for="Cadastrar"></label>
<div class="col-md-8">
<button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
<button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
</div>
</div>

</div>
</div>


</fieldset>
</form>
<script src="_js/conf_cad.js"></script>
</body>
</html>
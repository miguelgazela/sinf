
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  {include file="../common/css.tpl"}

</head>

<body>
    <div class="row row-offcanvas row-offcanvas-left">

      <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="list-group">
          <a href="{$BASE_URL}encomendas/ativas" class="list-group-item active">Encomendas Ativas</a>
          <a href="{$BASE_URL}encomendas/historico" class="list-group-item">Histórico</a>
          <a href="{$BASE_URL}encomendas/pesquisa" class="list-group-item">Pesquisa Avançada</a>
          <a href="{$BASE_URL}encomendas/calendario" class="list-group-item">Calendário</a>
          <a href="{$BASE_URL}utilizador/{$session_id}" class="list-group-item">Perfil Utilizador</a>
          <a href="{$BASE_URL}logout" class="list-group-item">Logout</a>
        </div>
      </div><!--/span-->

      <div class="col-xs-12 col-sm-9">
        <p class="pull-left visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
          <h2>Encomendas {$type}!</h2>
        </div>
      </div>

    </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

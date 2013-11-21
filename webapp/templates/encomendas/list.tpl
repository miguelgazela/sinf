
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <style type="text/css">
    #sidebar {
    float:left;
    background-color: #d4d4d4;
    height:100%;
    z-index:1000;
  }
  .overlay{
    opacity:0.8;
    background-color:#ccc;
    position:fixed;
    height:100%;
    left:0px;
    z-index:1000;
}
#logout{
  bottom: 0px;
}
  #navbar{
    background-color: #949494;
  }
  body { padding-top: 70px; }

  </style>

  {include file="../common/css.tpl"}
  
</head>

<nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
<h1>Bela Flor</h1>
</nav>

<body>


      <div class="col-xs-6 col-sm-3 sidebar-offcanvas overlay" id="sidebar" role="navigation">
        <h3>Username</h3>
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
        </div>
        <div class="list-group">
          <a href="{$BASE_URL}encomendas/ativas" class="list-group-item"><span class="badge pull-right">42</span>Encomendas Ativas</a>
          <a href="{$BASE_URL}encomendas/historico" class="list-group-item">Histórico</a>
          <a href="{$BASE_URL}encomendas/pesquisa" class="list-group-item">Pesquisa Avançada</a>
          <a href="{$BASE_URL}encomendas/calendario" class="list-group-item">Calendário</a>
          <a href="{$BASE_URL}utilizador/{$session_id}" class="list-group-item">Perfil Utilizador</a>
        </div>
        <div class="list-group" id="logout">
          <a href="{$BASE_URL}logout" class="list-group-item">Logout</a>
        </div>
      </div><!--/span-->

      <div class="col-xs-12 col-sm-9" id="content">
        <p class="pull-left visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>

        <!-- add content here -->
      </div>

    </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

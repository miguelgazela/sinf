
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil de Utilizador</title>

  {include file="../common/css.tpl"}

</head>

<body class="_profile">
  <div class="row row-offcanvas row-offcanvas-left">

    {include file="sidebar.tpl"}

    <div class="col-xs-12 col-sm-9">

      <nav class="navbar navbar-default" role="navigation">
      </nav>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">
        <h2>Perfil de Utilizador com id: {$session_id}</h2>
      </div>
    </div>

  </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

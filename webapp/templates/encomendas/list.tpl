
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet" type="text/css">

  {include file="common/css.tpl"}
  
</head>

<body>

  <!-- <div class="row row-offcanvas row-offcanvas-left"> -->
  <div class="row">

    {include file="sidebar.tpl"}

    <div class="col-xs-12 col-sm-9 content">
      
      <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown sorting">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenar por <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form action="#" class="navbar-form" role="search">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" class="form-control" placeholder="Pesquisa local..." onkeyup="narrowResults(this);">
          </div>
        </form>
      </nav>

      <div class="row">
        <div class="col-sm-12 col-md-12 packages">
          {foreach $packages as $package}

          <div class="package">
            <div class="package-header">
              <h5>ID: {$package.id}<span class="pull-right">#{$package.NumDoc}</span></h5>
            </div>
            <div class="row package-footer">
              <div class="col-sm-3">
                <h4>{$package.DataInicio}</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data pedido</p>
              </div>
              <div class="col-sm-3">
                <h4>{$package.DataFim}</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data entrega</p>
              </div>
              <div class="col-sm-3">
                <h4>{$package.TotalMerc}€</h4>
                <p><span class="glyphicon glyphicon-euro"></span> valor total</p>
              </div>
              <div class="col-sm-3"><button type="button" class="btn btn-default btn-sm" data-package-id="{$package.id}">ver detalhes</button></div>
            </div>
          </div>
          {/foreach}
        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

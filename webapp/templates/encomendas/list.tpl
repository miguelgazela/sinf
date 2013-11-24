
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

  <div class="row row-offcanvas row-offcanvas-left">

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

      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data início</th>
                <th>Data fim</th>
                <th>Estado</th>
                <th>Valor</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {foreach $packages as $package}
              <tr>
                <td class="package-id">{$package.id}</td>
                <td>{$package.DataInicio}</td>
                <td>{$package.DataFim}</td>
                <td>?</td>
                <td><span class="value">{$package.TotalMerc}€</span></td>
                <td><button type="button" class="btn btn-default btn-sm" data-package-id="{$package.id}">+ detalhes</button></td>
              </tr>
              {/foreach}
            </tbody>
          </table>
        </div>
        <div class="panel-footer">
          <p># Encomendas: {$packages|@count}</p>
        </div>
      </div>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
    </div><!--/col-xs-12-->

  </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

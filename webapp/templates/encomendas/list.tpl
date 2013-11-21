
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

    <div class="col-xs-12 col-sm-9" id="content">
      
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
        <form action="#" class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
      </nav>

      <div class="row content-header">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar encomenda..." onkeyup="narrowResults(this)">
          <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
        </div>
      </div>
      <div class="row content-body">
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
              <tbody></tbody>
            </table>
          </div>
          <div class="panel-footer">
            <p></p>
          </div>
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

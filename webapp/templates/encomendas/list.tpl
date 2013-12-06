
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
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
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

<ul class="nav nav-tabs" id="tabs">
  <li><a href="#aprocessar" data-toggle="tab">A processar</a></li>
  <li><a href="#aentregar" data-toggle="tab">A entregar</a></li>
  <li><a href="#entregue" data-toggle="tab">Entregues</a></li>
  <li><a href="#paga" data-toggle="tab">Pagas</a></li>
  <li><a href="#anuldada" data-toggle="tab">Anuladas</a></li>
  <li><a href="#devolvida" data-toggle="tab">Devolvidas</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active fade in" id="aprocessar">
     {foreach $packages as $package}
          <div class="package" data-package-id="{$package.codEncomenda}">
            <div class="package-header">
              {if $typeUser == 'MANAGER'}
              <h5>#{$package.codEncomenda} - ID: {$package.idPrimaveraEncomenda}<span class="pull-right">Cliente: <a href="{$BASE_URL}pages/clientes/view.php?codCliente={$package.codCliente}">{$package.codCliente}</a></span></h5>
              {else}
              <h5>ID: {$package.idPrimaveraEncomenda}<span class="pull-right">#{$package.codEncomenda}</span></h5>
              {/if}
            </div>
            <div class="row package-footer">
              <div class="col-sm-3">
                <h4>{$package.DataInicio}</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data pedido</p>
              </div>
              <div class="col-sm-3">
                {if $type == "inactive"}
                <h4>{$package.DataFim}</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data entrega</p>
                {else}
                <h4>{$package.estadoEntrega}</h4>
                <p><span class="glyphicon glyphicon-question-sign"></span> estado</p>
                {/if}
              </div>
              <div class="col-sm-3">
                <h4>{$package.totalMerc}€</h4>
                <p><span class="glyphicon glyphicon-euro"></span> valor total</p>
              </div>
              <div class="col-sm-3">
                <h4>{$package.numProdutos}</h4>
                <p><span class="glyphicon glyphicon-barcode"></span> produto{if $package.numProdutos != 1}s{/if}</p>

              </div>
            </div>
            <!-- <button type="button" class="btn btn-default btn-sm" data-package-id="{$package.id}">ver detalhes</button> -->
          </div>
          {/foreach}

          <!--fechar tab -->

  </div>
  <div class="tab-pane fade" id="aentregar">...</div>
  <div class="tab-pane fade" id="entregue">...</div>
  <div class="tab-pane fade" id="paga">...</div>
  <div class="tab-pane fade" id="anulada">...</div>
  <div class="tab-pane fade" id="devolvida">...</div>
</div>

         
        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  {include file="common/js.tpl"}
</body>

<script>
$(window).load(function(){
   $('#tabs a[href="#aprocessar"]').tab('show');
});
   
</script>
</html>

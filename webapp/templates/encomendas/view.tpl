
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
        <form action="#" class="navbar-form" role="search">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" class="form-control" placeholder="Pesquisa local..." onkeyup="narrowProductResults(this);">
          </div>
        </form>
      </nav>

      <div class="row">
        <div class="col-sm-12 col-md-12 packages">

          <div class="package" data-package-id="{$package.idPrimaveraEncomenda}">
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
                {if $package.estadoEntrega == "entregue" || $package.estadoEntrega == "paga"}
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
          </div>

          <h4>Percentagem de encomenda entregue: {$package.perEntrega}%</h4>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {$package.perEntrega}%;">
            </div>
          </div>
		  
		  {if $package.estadoEntrega == 'nao paga'}
		  <div id="pagamento">
			<h4> Data de pagamento: {$package.DataVencimento} </h4>
		</div>
		  {/if}

          <h4>Produtos:</h4>
          {foreach $products as $product name=foo}
            <div class="product" data-product-id="{$product.idPrimaveraArtigo}">
              <div class="product-header">
                <h5>#{$smarty.foreach.foo.iteration} - ID: {$product.idPrimaveraArtigo}<span class="pull-right">Cód. {$product.codArtigo}</span></h5>
              </div> <!-- product-header -->
              <div class="row product-footer">
                <div class="col-sm-3">
                  <h4>{$product.descricaoArtigo}</h4>
                  <p><span class="glyphicon glyphicon-question-sign"></span> descrição</p>
                </div>
                <div class="col-sm-3">
                  <h4>{$product.quantidade}{$product.unidade}</h4>
                  <p><span class="glyphicon glyphicon-th-large"></span> quantidade</p>
                </div>
                <div class="col-sm-3">
                  <h4>{$product.totalLiquido}€</h4>
                  <p><span class="glyphicon glyphicon-euro"></span> valor total</p>
                </div>
                <div class="col-sm-3">
                  <h4>{$product.ratingEntrega}</h4>
                  <p><span class="glyphicon glyphicon-ok"></span> entregue</p>

                </div>
              </div> <!-- product-footer -->
            </div> <!-- product -->
          {/foreach}
          
        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  {include file="common/js.tpl"}
</body>
</html>

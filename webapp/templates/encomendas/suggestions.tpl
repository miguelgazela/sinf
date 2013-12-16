
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet" type="text/css">

  {include file="../common/css.tpl"}
  
</head>

<body class="_suggestion">

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

      <div class="container">
      <h1>Sugestões de Compra</h1>

    <div class="row" id="sugestao" style="width:90%">

     {foreach $artigos as $artigo}
        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>{$artigo.descricaoArtigo}</h4>
                    <br/>
                    <p id="quantidadeSugest"><input type="number" placeholder="quantidade" class="form-control" style="width:80%" name="quantidade" min="1" max="20"/></p>
                    <p><a href="#" class="label label-danger" rel="tooltip" title="Comprar">Comprar</a></p>
                </div>
                {if $artigo.descricaoArtigo == 'Tulipas'}
                  <img src="../../img/suggestimg/tulipa.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Tesoura de Podar'}
                  <img src="../../img/suggestimg/turquesa.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Criação de Arranjos Florais'}
                  <img src="../../img/suggestimg/arranjos.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Rosas'}
                  <img src="../../img/suggestimg/rosaverm.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Alecrim'}
                  <img src="../../img/suggestimg/alecrim.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Margaridas'}
                  <img src="../../img/suggestimg/margarida.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Orquideas'}
                  <img src="../../img/suggestimg/orquidea.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Cravos'}
                  <img src="../../img/suggestimg/cravo.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Rosas Brancas'}
                  <img src="../../img/suggestimg/rosabranca.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Oliveira'}
                  <img src="../../img/suggestimg/oliveira.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Vasos'}
                  <img src="../../img/suggestimg/vasos.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Pá'}
                  <img src="../../img/suggestimg/pa.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Mangueira'}
                  <img src="../../img/suggestimg/mangueira.jpg" width="400" height="300" alt="...">
                {elseif $artigo.descricaoArtigo == 'Adubo Floral'}
                  <img src="../../img/suggestimg/adubo.jpg" width="400" height="300" alt="...">
                {/if}
            </div>
      </div>
    {/foreach}
  </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  {include file="common/js.tpl"}
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesquisa Avançada</title>

  {include file="../common/css.tpl"}

</head>

<body class="_search">
  <div class="row">

    {include file="sidebar.tpl"}

    <div class="col-xs-12 col-sm-9 content">
       <div class="page-header">
        <h1>Pesquisa Avançada</h1>
      </div>

      <div id="div_formSearch" class="col-lg-6">
    <form id="formSearch" method="post" action="{$BASE_URL}pages/encomendas/search_list.php" enctype="multipart/form-data">
      Codigo da encomenda: <input type="text" class="form-control" name="codEncomenda" pattern="\w*" />
      <br>
      Data do inicio: <input type="text" class="form-control" name="dateInit" placeholder="DD-MM-AAAA" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}"/>
      Data de fim: <input type="text" class="form-control" name="dateEnd" placeholder="DD-MM-AAAA" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}"/>
      <br>
      Preco: <input type="text" class="form-control" name="price" pattern="^(?=.*\d)\d*(?:\.\d\d)?$"/>
      <br>
      Artigos:
      <br>
      <table>
		{foreach $artigos as $artigo}
			{if $count == 0 || $count == ($third * $multi) || (($count - ($third * $multi)) < 1 && ($count - ($third * $multi)) > 0)}
			<tr>
				<td>
					<input type="checkbox" name="{$artigo.codArtigo}"> {$artigo.descricaoArtigo} 
				</td>
				
				{assign var=multi value=$multi+1}
				
			{elseif $count == ($third - 1) ||  ((($third * $multi) - $count) < 1 && (($third * $multi) - $count) > 0)}
				<td>
					<input type="checkbox" name="{$artigo.codArtigo}"> {$artigo.descricaoArtigo} 
				</td>
			</tr>
			{else}
				<td>
					<input type="checkbox" name="{$artigo.codArtigo}"> {$artigo.descricaoArtigo} 
				</td>
			{/if}
			
			{assign var=count value=$count+1}
		{/foreach}
      </table>
      <br>
      Morada: <input type="text" class="form-control" name="address"/>
      <br>
      Quantidade: <input type="number" class="form-control" name="quantidade" min="1" max="20"/>
      <br>
      <br>
      <input type="submit" class="btn btn-default" value="Procurar"/>
    </form>
  </div>
    </div>

  </div><!--/row-->

  {include file="../common/js.tpl"}
</body>
</html>

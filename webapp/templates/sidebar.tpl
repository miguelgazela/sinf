<!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
  <div class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="http://placehold.it/64x64" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">{$s_nome}</h4>
      {$data}
    </div>
  </div>

  <form action="{$BASE_URL}pages/encomendas/searchID.php" method="GET" role="form">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Pesquisa por ID" name="searchIDInput">
      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
    </div>
  </form>

  <div class="list-group">
    <a href="{$BASE_URL}pages/encomendas/list.php" class="list-group-item _list">
      <span class=".glyphicon .glyphicon-list"></span>
      <span class="glyphicon glyphicon-list"></span> Encomendas Ativas
      {if isset($counterEncomendasAtivas) and count($counterEncomendasAtivas) > 0}
        <span class="badge pull-right">{$counterEncomendasAtivas}</span>
      {/if}
    </a>
    <a href="{$BASE_URL}pages/encomendas/historic.php" class="list-group-item _history">
      <span class="glyphicon glyphicon-check"></span> Encomendas Entregues
    </a>
	<a href="{$BASE_URL}pages/encomendas/devolutions.php" class="list-group-item _devolutions">
      <span class="glyphicon glyphicon-repeat"></span> Devoluções
    </a>
    <a href="{$BASE_URL}pages/encomendas/search.php" class="list-group-item _search">
      <span class="glyphicon glyphicon-search"></span> Pesquisa Avançada
    </a>
    <a href="{$BASE_URL}pages/calendar.php" class="list-group-item _calendar">
      <span class="glyphicon glyphicon-calendar"></span> Calendário
    </a>
	{if $typeUser == "CLIENT"}
	<a href="{$BASE_URL}pages/encomendas/suggestions.php" class="list-group-item _suggestion">
      <span class="glyphicon glyphicon-certificate"></span> Sugestões
    </a>
	{/if}
    <a href="{$BASE_URL}pages/auth/view.php" class="list-group-item _profile">
      <span class="glyphicon glyphicon-user"></span> {if $typeUser == "CLIENT"}Perfil Utilizador{else}Perfil Gerente{/if}
    </a>
    <a href="{$BASE_URL}actions/auth/logout.php" class="list-group-item log-out">
      <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>
  </div>

</div><!--/col-xs-6-->
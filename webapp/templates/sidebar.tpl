<!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
  <div class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="http://placehold.it/64x64" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">Miguel Oliveira</h4>
      22/11/2013 10:52
    </div>
  </div>

  <form action="#" role="form">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Pesquisa por ID">
      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
    </div>
  </form>

  <div class="list-group">
    <a href="{$BASE_URL}pages/encomendas/list.php?type=active" class="list-group-item {if $type == 'active'}active{/if}">
      <span class=".glyphicon .glyphicon-list"></span>
      <span class="glyphicon glyphicon-list"></span> Encomendas Ativas
      {if isset($packages) and count($packages) > 0}
        <span class="badge pull-right">{count($packages)}</span>
      {/if}
    </a>
    <a href="{$BASE_URL}pages/encomendas/list.php?type=inactive" class="list-group-item {if $type == 'inactive'}active{/if}">
      <span class="glyphicon glyphicon-check"></span> Histórico
    </a>
    <a href="{$BASE_URL}pages/encomendas/search.php" class="list-group-item _search">
      <span class="glyphicon glyphicon-search"></span> Pesquisa Avançada
    </a>
    <a href="{$BASE_URL}pages/calendar.php" class="list-group-item _calendar">
      <span class="glyphicon glyphicon-calendar"></span> Calendário
    </a>
    <a href="{$BASE_URL}pages/auth/view.php" class="list-group-item _profile">
      <span class="glyphicon glyphicon-user"></span> Perfil Utilizador
    </a>
    <a href="{$BASE_URL}pages/auth/logout.php" class="list-group-item log-out">
      <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>
  </div>

</div><!--/col-xs-6-->
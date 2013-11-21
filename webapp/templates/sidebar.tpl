<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">

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
    <a href="{$BASE_URL}encomendas/ativas" class="list-group-item {if $type == 'active'}active{/if}"><span class=".glyphicon .glyphicon-list"></span><span class="glyphicon glyphicon-list"></span> Encomendas Ativas<span class="badge pull-right">42</span></a>
    <a href="{$BASE_URL}encomendas/historico" class="list-group-item {if $type == 'inactive'}active{/if}"><span class="glyphicon glyphicon-check"></span> Histórico</a>
    <a href="{$BASE_URL}encomendas/pesquisa" class="list-group-item"><span class="glyphicon glyphicon-search"></span> Pesquisa Avançada</a>
    <a href="{$BASE_URL}encomendas/calendario" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Calendário</a>
    <a href="{$BASE_URL}utilizador/{$session_id}" class="list-group-item" style="border-bottom:1px solid #c2c2c2;"><span class="glyphicon glyphicon-user"></span> Perfil Utilizador</a>
    <a href="{$BASE_URL}logout" class="list-group-item log-out"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </div>

</div><!--/col-xs-6-->
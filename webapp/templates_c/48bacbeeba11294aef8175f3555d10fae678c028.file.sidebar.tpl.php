<?php /* Smarty version Smarty-3.1.13, created on 2013-12-14 21:33:49
         compiled from "C:\xampp\htdocs\webapp\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5915529a34e93f9349-81505704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48bacbeeba11294aef8175f3555d10fae678c028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\sidebar.tpl',
      1 => 1387041461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5915529a34e93f9349-81505704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529a34e9410a49_51100070',
  'variables' => 
  array (
    's_nome' => 0,
    'data' => 0,
    'BASE_URL' => 0,
    'counterEncomendasAtivas' => 0,
    'counterEncomendasEntregues' => 0,
    'counterEncomendasDevolvidas' => 0,
    'typeUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529a34e9410a49_51100070')) {function content_529a34e9410a49_51100070($_smarty_tpl) {?><!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
  <div class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="../../img/profile.png" width="64" height="64" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['s_nome']->value;?>
</h4>
      <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </div>
  </div>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/searchID.php" method="GET" role="form">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Pesquisa por ID" name="searchIDInput">
      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
    </div>
  </form>

  <div class="list-group">
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/list.php" class="list-group-item _list">
      <span class=".glyphicon .glyphicon-list"></span>
      <span class="glyphicon glyphicon-list"></span> Encomendas Ativas
      <?php if (isset($_smarty_tpl->tpl_vars['counterEncomendasAtivas']->value)&&count($_smarty_tpl->tpl_vars['counterEncomendasAtivas']->value)>0){?>
        <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['counterEncomendasAtivas']->value;?>
</span>
      <?php }?>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/historic.php" class="list-group-item _history">
      <span class="glyphicon glyphicon-check"></span> Encomendas Entregues
	  <?php if (isset($_smarty_tpl->tpl_vars['counterEncomendasEntregues']->value)&&count($_smarty_tpl->tpl_vars['counterEncomendasEntregues']->value)>0){?>
        <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['counterEncomendasEntregues']->value;?>
</span>
      <?php }?>
    </a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/devolutions.php" class="list-group-item _devolutions">
      <span class="glyphicon glyphicon-repeat"></span> Devoluções
	  <?php if (isset($_smarty_tpl->tpl_vars['counterEncomendasDevolvidas']->value)&&count($_smarty_tpl->tpl_vars['counterEncomendasDevolvidas']->value)>0){?>
        <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['counterEncomendasDevolvidas']->value;?>
</span>
      <?php }?>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/search.php" class="list-group-item _search">
      <span class="glyphicon glyphicon-search"></span> Pesquisa Avançada
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/calendar.php" class="list-group-item _calendar">
      <span class="glyphicon glyphicon-calendar"></span> Calendário
    </a>
	<?php if ($_smarty_tpl->tpl_vars['typeUser']->value=="CLIENT"){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/suggestions.php" class="list-group-item _suggestion">
      <span class="glyphicon glyphicon-certificate"></span> Sugestões
    </a>
	<?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/auth/view.php" class="list-group-item _profile">
      <span class="glyphicon glyphicon-user"></span> <?php if ($_smarty_tpl->tpl_vars['typeUser']->value=="CLIENT"){?>Informações<?php }else{ ?>Informações<?php }?>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/logout.php" class="list-group-item log-out">
      <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>
  </div>

</div><!--/col-xs-6--><?php }} ?>
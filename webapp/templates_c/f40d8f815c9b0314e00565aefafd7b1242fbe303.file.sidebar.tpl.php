<?php /* Smarty version Smarty-3.1.13, created on 2013-11-27 12:13:09
         compiled from "/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1066738897528fa661a6d2d9-63081647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40d8f815c9b0314e00565aefafd7b1242fbe303' => 
    array (
      0 => '/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/sidebar.tpl',
      1 => 1385552924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066738897528fa661a6d2d9-63081647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528fa661aa8a87_67285718',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'type' => 0,
    'packages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528fa661aa8a87_67285718')) {function content_528fa661aa8a87_67285718($_smarty_tpl) {?><!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
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
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/list.php?type=active" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='active'){?>active<?php }?>">
      <span class=".glyphicon .glyphicon-list"></span>
      <span class="glyphicon glyphicon-list"></span> Encomendas Ativas
      <?php if (isset($_smarty_tpl->tpl_vars['packages']->value)&&count($_smarty_tpl->tpl_vars['packages']->value)>0){?>
        <span class="badge pull-right"><?php echo count($_smarty_tpl->tpl_vars['packages']->value);?>
</span>
      <?php }?>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/list.php?type=inactive" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='inactive'){?>active<?php }?>">
      <span class="glyphicon glyphicon-check"></span> Histórico
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/search.php" class="list-group-item _search">
      <span class="glyphicon glyphicon-search"></span> Pesquisa Avançada
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar.php" class="list-group-item _calendar">
      <span class="glyphicon glyphicon-calendar"></span> Calendário
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/auth/view.php" class="list-group-item _profile">
      <span class="glyphicon glyphicon-user"></span> Perfil Utilizador
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/auth/logout.php" class="list-group-item log-out">
      <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>
  </div>

</div><!--/col-xs-6--><?php }} ?>
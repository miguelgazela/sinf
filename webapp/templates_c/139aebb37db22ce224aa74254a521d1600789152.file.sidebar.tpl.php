<?php /* Smarty version Smarty-3.1.13, created on 2013-11-25 10:34:02
         compiled from "c:\wamp\www\sinf\webapp\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204025293279a4d6187-12583336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139aebb37db22ce224aa74254a521d1600789152' => 
    array (
      0 => 'c:\\wamp\\www\\sinf\\webapp\\templates\\sidebar.tpl',
      1 => 1385375418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204025293279a4d6187-12583336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'type' => 0,
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5293279a591f27_47300206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5293279a591f27_47300206')) {function content_5293279a591f27_47300206($_smarty_tpl) {?><!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
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
encomendas/ativas" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='active'){?>active<?php }?>">
      <span class=".glyphicon .glyphicon-list"></span>
      <span class="glyphicon glyphicon-list"></span> Encomendas Ativas
      <span class="badge pull-right">42</span>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/historico" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='inactive'){?>active<?php }?>">
      <span class="glyphicon glyphicon-check"></span> Histórico
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/pesquisa" class="list-group-item _search">
      <span class="glyphicon glyphicon-search"></span> Pesquisa Avançada
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/calendario" class="list-group-item _calendar">
      <span class="glyphicon glyphicon-calendar"></span> Calendário
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
utilizador/<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
" class="list-group-item _profile">
      <span class="glyphicon glyphicon-user"></span> Perfil Utilizador
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout" class="list-group-item log-out">
      <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>
  </div>

</div><!--/col-xs-6--><?php }} ?>
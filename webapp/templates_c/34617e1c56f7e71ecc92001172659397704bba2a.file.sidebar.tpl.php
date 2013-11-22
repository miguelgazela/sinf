<?php /* Smarty version Smarty-3.1.13, created on 2013-11-21 23:03:21
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486733428528df6c7008fe9-62923876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34617e1c56f7e71ecc92001172659397704bba2a' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/sidebar.tpl',
      1 => 1385071398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1486733428528df6c7008fe9-62923876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528df6c70aab88_92579698',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'type' => 0,
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528df6c70aab88_92579698')) {function content_528df6c70aab88_92579698($_smarty_tpl) {?><div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">

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
encomendas/ativas" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='active'){?>active<?php }?>"><span class=".glyphicon .glyphicon-list"></span><span class="glyphicon glyphicon-list"></span> Encomendas Ativas<span class="badge pull-right">42</span></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/historico" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value=='inactive'){?>active<?php }?>"><span class="glyphicon glyphicon-check"></span> Histórico</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/pesquisa" class="list-group-item _search"><span class="glyphicon glyphicon-search"></span> Pesquisa Avançada</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/calendario" class="list-group-item _calendar"><span class="glyphicon glyphicon-calendar"></span> Calendário</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
utilizador/<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
" class="list-group-item _profile" style="border-bottom:1px solid #c2c2c2;"><span class="glyphicon glyphicon-user"></span> Perfil Utilizador</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout" class="list-group-item log-out"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
  </div>

</div><!--/col-xs-6--><?php }} ?>
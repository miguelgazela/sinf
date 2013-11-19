<?php /* Smarty version Smarty-3.1.13, created on 2013-11-19 16:54:42
         compiled from "/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/encomendas/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155938848528a8ee256c990-54012854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee78a5fe23fc819f0632e7139ff8e637f7ae19a7' => 
    array (
      0 => '/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/encomendas/list.tpl',
      1 => 1384880075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155938848528a8ee256c990-54012854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528a8ee2608495_43445837',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a8ee2608495_43445837')) {function content_528a8ee2608495_43445837($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <style type="text/css">
    #sidebar {

    float:left;
  }
  </style>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  
</head>

<body>
    <div class="row row-offcanvas row-offcanvas-left">

      <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <h3>Username</h3>
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
        </div>
        <div class="list-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/ativas" class="list-group-item"><span class="badge pull-right">42</span>Encomendas Ativas</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/historico" class="list-group-item">Histórico</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/pesquisa" class="list-group-item">Pesquisa Avançada</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/calendario" class="list-group-item">Calendário</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
utilizador/<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
" class="list-group-item">Perfil Utilizador</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
logout" class="list-group-item">Logout</a>
        </div>
      </div><!--/span-->

      <div class="col-xs-12 col-sm-9" id="content">
        <p class="pull-left visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>

        <!-- add content here -->
      </div>

    </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
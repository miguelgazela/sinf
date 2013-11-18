<?php /* Smarty version Smarty-3.1.13, created on 2013-11-18 22:31:01
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350983210528a3d5abb3c32-71431304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb44b8f9a6480c90bcacaf84aa3127a389eae52' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/list.tpl',
      1 => 1384810253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350983210528a3d5abb3c32-71431304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528a3d5ac1bd53_47351053',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'session_id' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a3d5ac1bd53_47351053')) {function content_528a3d5ac1bd53_47351053($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body>
    <div class="row row-offcanvas row-offcanvas-left">

      <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="list-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
encomendas/ativas" class="list-group-item active">Encomendas Ativas</a>
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

      <div class="col-xs-12 col-sm-9">
        <p class="pull-left visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
          <h2>Encomendas <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
!</h2>
        </div>
      </div>

    </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-21 15:46:04
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/utilizadores/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232809210528a4326819395-25618846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02cd97492f50531cea2d29a04c6d738a86b99f4b' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/utilizadores/view.tpl',
      1 => 1385045065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232809210528a4326819395-25618846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528a43268b77a6_94081366',
  'variables' => 
  array (
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a43268b77a6_94081366')) {function content_528a43268b77a6_94081366($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil de Utilizador</title>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body class="_profile">
  <div class="row row-offcanvas row-offcanvas-left">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9">

      <nav class="navbar navbar-default" role="navigation">
      </nav>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">
        <h2>Perfil de Utilizador com id: <?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
</h2>
      </div>
    </div>

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
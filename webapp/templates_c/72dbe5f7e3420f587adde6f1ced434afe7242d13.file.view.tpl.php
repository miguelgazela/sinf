<?php /* Smarty version Smarty-3.1.13, created on 2013-11-22 19:04:47
         compiled from "/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/utilizadores/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1231909682528faacf7140a6-22493499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72dbe5f7e3420f587adde6f1ced434afe7242d13' => 
    array (
      0 => '/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/utilizadores/view.tpl',
      1 => 1385118308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1231909682528faacf7140a6-22493499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528faacf787d60_00355728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528faacf787d60_00355728')) {function content_528faacf787d60_00355728($_smarty_tpl) {?>
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
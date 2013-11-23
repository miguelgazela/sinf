<?php /* Smarty version Smarty-3.1.13, created on 2013-11-22 19:04:45
         compiled from "/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/encomendas/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1398449017528faacdd06ca5-86674518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969d4b721d92320d4d88aa27e360ffeaff1e28d4' => 
    array (
      0 => '/Users/nelsonmendes/Documents/Git/sinf/webapp/templates/encomendas/search.tpl',
      1 => 1385118308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398449017528faacdd06ca5-86674518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528faacdd74392_73276525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528faacdd74392_73276525')) {function content_528faacdd74392_73276525($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesquisa Avançada</title>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body class="_search">
  <div class="row row-offcanvas row-offcanvas-left">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9">

      <nav class="navbar navbar-default" role="navigation">
      </nav>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">
        <h2>Pesquisa Avançada</h2>
      </div>
    </div>

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-21 13:12:40
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157117406528a4325510619-73599953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911e087180d3072093929de9a8835f2f2ca4ca74' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/calendar.tpl',
      1 => 1385035941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157117406528a4325510619-73599953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528a4325590b39_61742219',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a4325590b39_61742219')) {function content_528a4325590b39_61742219($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Calendário</title>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body>
  <div class="row row-offcanvas row-offcanvas-left">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9">

      <nav class="navbar navbar-default" role="navigation">
      </nav>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      
      <div class="jumbotron">
        <h2>Calendário</h2>
      </div>
    </div> <!-- col-xs-12 -->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
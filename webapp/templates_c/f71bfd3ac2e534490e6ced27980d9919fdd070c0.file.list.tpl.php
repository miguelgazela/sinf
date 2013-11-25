<?php /* Smarty version Smarty-3.1.13, created on 2013-11-25 12:20:49
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/clientes/encomendas/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:442506285529331870beb41-07878996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71bfd3ac2e534490e6ced27980d9919fdd070c0' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/clientes/encomendas/list.tpl',
      1 => 1385378446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442506285529331870beb41-07878996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5293318718aac4_33917230',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'packages' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5293318718aac4_33917230')) {function content_5293318718aac4_33917230($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <?php echo $_smarty_tpl->getSubTemplate ("common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  
</head>

<body>

  <!-- <div class="row row-offcanvas row-offcanvas-left"> -->
  <div class="row">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">
      
      <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown sorting">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenar por <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form action="#" class="navbar-form" role="search">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" class="form-control" placeholder="Pesquisa local..." onkeyup="narrowResults(this);">
          </div>
        </form>
      </nav>

      <div class="row">
        <div class="col-sm-12 col-md-12 packages">
          <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value){
$_smarty_tpl->tpl_vars['package']->_loop = true;
?>
          <div class="package" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">
            <div class="package-header">
              <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
<span class="pull-right">#<?php echo $_smarty_tpl->tpl_vars['package']->value['NumDoc'];?>
</span></h5>
            </div>
            <div class="row package-footer">
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['DataInicio'];?>
</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data pedido</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['DataFim'];?>
</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data entrega</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['TotalMerc'];?>
€</h4>
                <p><span class="glyphicon glyphicon-euro"></span> valor total</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['numProdutos'];?>
</h4>
                <p><span class="glyphicon glyphicon-barcode"></span> produto<?php if ($_smarty_tpl->tpl_vars['package']->value['numProdutos']!=1){?>s<?php }?></p>

              </div>
            </div>
            <!-- <button type="button" class="btn btn-default btn-sm" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">ver detalhes</button> -->
          </div>
          <?php } ?>
        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
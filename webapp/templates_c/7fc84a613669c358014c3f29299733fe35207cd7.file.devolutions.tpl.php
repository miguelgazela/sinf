<?php /* Smarty version Smarty-3.1.13, created on 2013-12-13 15:35:40
         compiled from "C:\xampp\htdocs\webapp\templates\encomendas\devolutions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1269052a5eb583c0c33-79908112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc84a613669c358014c3f29299733fe35207cd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\encomendas\\devolutions.tpl',
      1 => 1386948928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1269052a5eb583c0c33-79908112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a5eb58455367_85154115',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'packages_devolvidasAtivas' => 0,
    'package' => 0,
    'typeUser' => 0,
    'packages_devolvidas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a5eb58455367_85154115')) {function content_52a5eb58455367_85154115($_smarty_tpl) {?>
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

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  
</head>

<body class="_devolutions">

  <!-- <div class="row row-offcanvas row-offcanvas-left"> -->
  <div class="row">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">
	
	<nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown sorting">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenar por <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
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

<ul class="nav nav-tabs" id="tabs">
  <li><a href="#ativas" data-toggle="tab">Ativas</a></li>
  <li><a href="#historico" data-toggle="tab">Histórico</a></li>
</ul>

          <div class="tab-content">
  <div class="tab-pane active fade in" id="ativas">
     <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages_devolvidasAtivas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value){
$_smarty_tpl->tpl_vars['package']->_loop = true;
?>
          <div class="packageDev" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
">
            <div class="package-header">
              <?php if ($_smarty_tpl->tpl_vars['typeUser']->value=='MANAGER'){?>
              <h5>#<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
 - ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['idPrimaveraEncomenda'];?>
<span class="pull-right">Cliente: <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/clientes/view.php?codCliente=<?php echo $_smarty_tpl->tpl_vars['package']->value['codCliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['package']->value['codCliente'];?>
</a></span></h5>
              <?php }else{ ?>
              <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['idPrimaveraEncomenda'];?>
<span class="pull-right">#<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
</span></h5>
              <?php }?>
            </div>
            <div class="row package-footer">
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['DataInicio'];?>
</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data pedido</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['estadoEntrega'];?>
</h4>
                <p><span class="glyphicon glyphicon-question-sign"></span> motivo</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['totalMerc'];?>
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
  
  <div class="tab-pane fade" id="historico">
     <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages_devolvidas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value){
$_smarty_tpl->tpl_vars['package']->_loop = true;
?>
          <div class="packageDev" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
">
            <div class="package-header">
              <?php if ($_smarty_tpl->tpl_vars['typeUser']->value=='MANAGER'){?>
              <h5>#<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
 - ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['idPrimaveraEncomenda'];?>
<span class="pull-right">Cliente: <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/clientes/view.php?codCliente=<?php echo $_smarty_tpl->tpl_vars['package']->value['codCliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['package']->value['codCliente'];?>
</a></span></h5>
              <?php }else{ ?>
              <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['idPrimaveraEncomenda'];?>
<span class="pull-right">#<?php echo $_smarty_tpl->tpl_vars['package']->value['codEncomenda'];?>
</span></h5>
              <?php }?>
            </div>
            <div class="row package-footer">
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['DataInicio'];?>
</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> data pedido</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['estadoEntrega'];?>
</h4>
                <p><span class="glyphicon glyphicon-question-sign"></span> motivo</p>
              </div>
              <div class="col-sm-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['package']->value['totalMerc'];?>
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
          <!--fechar tab -->

        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
<script>
$(window).load(function(){
   $('#tabs a[href="#ativas"]').tab('show');
});
</script>
</html>
<?php }} ?>
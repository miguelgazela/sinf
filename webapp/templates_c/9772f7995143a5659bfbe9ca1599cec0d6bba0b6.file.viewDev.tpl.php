<?php /* Smarty version Smarty-3.1.13, created on 2013-12-09 17:07:17
         compiled from "C:\xampp\htdocs\webapp\templates\encomendas\viewDev.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2645952a5f7079d7be2-70068226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9772f7995143a5659bfbe9ca1599cec0d6bba0b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\encomendas\\viewDev.tpl',
      1 => 1386608688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2645952a5f7079d7be2-70068226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a5f707ad9917_58302411',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'package' => 0,
    'typeUser' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a5f707ad9917_58302411')) {function content_52a5f707ad9917_58302411($_smarty_tpl) {?>
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
        <form action="#" class="navbar-form" role="search">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" class="form-control" placeholder="Pesquisa local..." onkeyup="narrowProductResults(this);">
          </div>
        </form>
      </nav>

      <div class="row">
        <div class="col-sm-12 col-md-12 packages">

          <div class="package" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['idPrimaveraEncomenda'];?>
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
                <p><span class="glyphicon glyphicon-question-sign"></span> estado</p>
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
          </div>

          <h4>Produtos devolvidos:</h4>
          <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
		  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantidade']>0){?>
            <div class="product" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['idPrimaveraArtigo'];?>
">
              <div class="product-header">
                <h5>#<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
 - ID: <?php echo $_smarty_tpl->tpl_vars['product']->value['idPrimaveraArtigo'];?>
<span class="pull-right">Cód. <?php echo $_smarty_tpl->tpl_vars['product']->value['codArtigo'];?>
</span></h5>
              </div> <!-- product-header -->
              <div class="row product-footer">
                <div class="col-sm-3">
                  <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['descricaoArtigo'];?>
</h4>
                  <p><span class="glyphicon glyphicon-question-sign"></span> descrição</p>
                </div>
                <div class="col-sm-3">
                  <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['quantidade'];?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['unidade'];?>
</h4>
                  <p><span class="glyphicon glyphicon-th-large"></span> quantidade devolvida</p>
                </div>
                <div class="col-sm-3">
                  <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['quantidade']*$_smarty_tpl->tpl_vars['product']->value['precoUnitario'];?>
€</h4>
                  <p><span class="glyphicon glyphicon-euro"></span> valor devolvido</p>
                </div>
                <div class="col-sm-3">
                  <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['ratingEntrega'];?>
</h4>
                  <p><span class="glyphicon glyphicon-ok"></span> entregue</p>

                </div>
              </div> <!-- product-footer -->
            </div> <!-- product -->
			<?php }?>
          <?php } ?>
          
        </div>
      </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-24 13:46:20
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350983210528a3d5abb3c32-71431304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb44b8f9a6480c90bcacaf84aa3127a389eae52' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/list.tpl',
      1 => 1385297177,
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
    'packages' => 0,
    'package' => 0,
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
        <div class="col-md-12 packages">
          <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value){
$_smarty_tpl->tpl_vars['package']->_loop = true;
?>
          <div class="package">
            <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
</h5>
          </div>
          <div class="package">
            <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
</h5>
          </div>
          <div class="package">
            <h5>ID: <?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
</h5>
          </div>
          <?php } ?>
        </div>
      </div>

      <!-- <div class="panel panel-default">
        <div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Data início</th>
                <th>Data fim</th>
                <th>Estado</th>
                <th>Valor</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value){
$_smarty_tpl->tpl_vars['package']->_loop = true;
?>
              <tr>
                <td class="package-id"><?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['package']->value['DataInicio'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['package']->value['DataFim'];?>
</td>
                <td>?</td>
                <td><span class="value"><?php echo $_smarty_tpl->tpl_vars['package']->value['TotalMerc'];?>
€</span></td>
                <td><button type="button" class="btn btn-default btn-sm" data-package-id="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">+ detalhes</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="panel-footer">
          <p># Encomendas: <?php echo count($_smarty_tpl->tpl_vars['packages']->value);?>
</p>
        </div>
      </div> -->

    </div><!--/col-xs-12-->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
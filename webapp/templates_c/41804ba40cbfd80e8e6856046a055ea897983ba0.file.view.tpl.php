<?php /* Smarty version Smarty-3.1.13, created on 2013-11-27 11:46:03
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14040208845295cd6b0b2b77-01841689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41804ba40cbfd80e8e6856046a055ea897983ba0' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/view.tpl',
      1 => 1385549123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14040208845295cd6b0b2b77-01841689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295cd6b1469f0_57607579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295cd6b1469f0_57607579')) {function content_5295cd6b1469f0_57607579($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil de Utilizador</title>

  <?php echo $_smarty_tpl->getSubTemplate ("common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body class="_profile">
  <div class="row">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">

      <div class="page-header">
        <h1><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['NomeCliente'];?>
 <small>código cliente: <?php echo $_smarty_tpl->tpl_vars['user']->value['CodCliente'];?>
</small></h1>
      </div>

      <div class="container">
        <p>Contribuinte #<?php echo $_smarty_tpl->tpl_vars['user']->value['NumContribuinte'];?>
</p>
        <address>
          <?php echo $_smarty_tpl->tpl_vars['user']->value['Morada'];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['user']->value['Local'];?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value['Codigo_Postal'];?>
<br>
          <abbr title="Telefone">Tlf:</abbr> <?php echo $_smarty_tpl->tpl_vars['user']->value['Telefone'];?>

        </address>
      </div>

      <!-- <canvas id="myChart" width="760" height="300"></canvas> -->
  
    </div>

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



  <script>
  var data = {
    labels : ["Janeiro 2013","Fevereiro 2013","Março 2013","Abril 2013","Maio 2013","Junho 2013","Julho 2013"],
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : [2,0,3,4,1,1,6]
    }
    ]
  }

    //Get the context of the canvas element we want to select
    var ctx = document.getElementById("myChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(data);


  </script>
</body>
</html>
<?php }} ?>
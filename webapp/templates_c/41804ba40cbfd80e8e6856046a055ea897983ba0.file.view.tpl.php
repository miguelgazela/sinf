<?php /* Smarty version Smarty-3.1.13, created on 2013-11-30 15:43:57
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14040208845295cd6b0b2b77-01841689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41804ba40cbfd80e8e6856046a055ea897983ba0' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/view.tpl',
      1 => 1385822610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14040208845295cd6b0b2b77-01841689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295cd6b1469f0_57607579',
  'variables' => 
  array (
    'user' => 0,
    'graph_data_keys' => 0,
    'graph_data_values' => 0,
    'graph_data_values_2' => 0,
  ),
  'has_nocache_code' => false,
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


  <style>

  .page-header {
    margin-top: 20px;
  }

  h4 {
    margin-top: 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #E9E8E3;
  }

  h5 {
    margin-bottom: 2px;
  }

  .info {
    padding-left: 15px;
    margin-top: 20px;
  }

  </style>

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

      <div class="row">
        <div class="col-sm-12">
          <h4>Informação pessoal</h4>
          <div class="info">
            <p>Número de contribuinte: <?php echo $_smarty_tpl->tpl_vars['user']->value['NumContribuinte'];?>
</p>
            <h5>Morada</h5>
            <address>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['Morada'];?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['Local'];?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value['Codigo_Postal'];?>
<br>
              <abbr title="Telefone">Tlf:</abbr> <?php echo $_smarty_tpl->tpl_vars['user']->value['Telefone'];?>

            </address>
          </div>
          
        </div>
        <div class="col-sm-12">
          <h4>Número de encomendas realizadas</h4>
          <canvas id="myChart" width="730" height="180"></canvas>
          <h4>Valor gasto</h4>
          <canvas id="myChart2" width="730" height="180"></canvas>
        </div>
      </div>
    </div>

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



  <script>

  var data = {
    labels : <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['graph_data_keys']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
,
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : <?php echo $_smarty_tpl->tpl_vars['graph_data_values']->value;?>

    }
    ]
  }

  var data2 = {
    labels : <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['graph_data_keys']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
,
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : <?php echo $_smarty_tpl->tpl_vars['graph_data_values_2']->value;?>

    }
    ]
  }

  //Get the context of the canvas element we want to select
  var ctx = document.getElementById("myChart").getContext("2d");
  var myNewChart = new Chart(ctx).Line(data);

  var ctx = document.getElementById("myChart2").getContext("2d");
  var myNewChart = new Chart(ctx).Line(data2);

  </script>
</body>
</html>
<?php }} ?>
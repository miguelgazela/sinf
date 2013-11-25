<?php /* Smarty version Smarty-3.1.13, created on 2013-11-25 10:34:15
         compiled from "c:\wamp\www\sinf\webapp\templates\encomendas\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14521529327a7488ea8-69626743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8183f167a537af1fac4409b8c93478cbea2d7a50' => 
    array (
      0 => 'c:\\wamp\\www\\sinf\\webapp\\templates\\encomendas\\calendar.tpl',
      1 => 1385235399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14521529327a7488ea8-69626743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529327a755d316_53343471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529327a755d316_53343471')) {function content_529327a755d316_53343471($_smarty_tpl) {?>
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

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</head>

<body class="_calendars">
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
  <div id="calendar" class="calendar"></div>
      <style type="text/css">
        
      </style>
    <script type="text/javascript">
      $(document).ready( function(){
        theMonths = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        theDays = ["D", "S", "T", "Q", "Q", "S", "S"];
        $('.calendar').calendar({
          months: theMonths,
          days: theDays,
          req_ajax: {
            type: 'get',
            url: '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
ajax/json.php'
          }
        });
      });
    </script>
    </div> <!-- col-xs-12 -->

  </div><!--/row-->

</body>
</html>
<?php }} ?>
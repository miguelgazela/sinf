<?php /* Smarty version Smarty-3.1.13, created on 2013-11-27 11:44:40
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9749766505295cd04db6c13-61150038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615baa9df9a46846642220c4b00233f6bf908b04' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/calendar.tpl',
      1 => 1385549078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9749766505295cd04db6c13-61150038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295cd04e21149_86599195',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295cd04e21149_86599195')) {function content_5295cd04e21149_86599195($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Calendário</title>

  <?php echo $_smarty_tpl->getSubTemplate ("common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</head>

<body class="_calendar">
  <div class="row">
        

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">

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
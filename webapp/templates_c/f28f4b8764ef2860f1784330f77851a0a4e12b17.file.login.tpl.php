<?php /* Smarty version Smarty-3.1.13, created on 2013-12-03 10:44:33
         compiled from "C:\xampp\htdocs\webapp\templates\auth\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7635529b73c44957d8-50822242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f28f4b8764ef2860f1784330f77851a0a4e12b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\auth\\login.tpl',
      1 => 1385942195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7635529b73c44957d8-50822242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529b73c48df358_19387682',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529b73c48df358_19387682')) {function content_529b73c48df358_19387682($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <title>Signin Template for Bootstrap</title>

  <?php echo $_smarty_tpl->getSubTemplate ("common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body class="login">

  <div class="container">
    <h2 class="text-center">BelaFlor Log in</h2>

    <form role="form" id="login">
      <div class="form-group">
        <label for="inputUsernameEmail">NIF</label>
        <input type="text" class="form-control" id="inputNif">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <button id="loginButton" type="submit" class="btn btn btn-default pull-right">LOGIN</button>
    </form>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
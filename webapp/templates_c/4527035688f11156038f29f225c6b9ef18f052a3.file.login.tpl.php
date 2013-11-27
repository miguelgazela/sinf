<?php /* Smarty version Smarty-3.1.13, created on 2013-11-27 13:13:58
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17814677075295d86a6a0a26-08855687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4527035688f11156038f29f225c6b9ef18f052a3' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/auth/login.tpl',
      1 => 1385554423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17814677075295d86a6a0a26-08855687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295d86a6fbd08_31061233',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295d86a6fbd08_31061233')) {function content_5295d86a6fbd08_31061233($_smarty_tpl) {?>
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

    <form role="form">
      <div class="form-group">
        <label for="inputUsernameEmail">NIF</label>
        <input type="text" class="form-control" id="inputUsernameEmail">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <button type="submit" class="btn btn btn-default pull-right">LOGIN</button>
    </form>

  </div>
</body>
</html>
<?php }} ?>
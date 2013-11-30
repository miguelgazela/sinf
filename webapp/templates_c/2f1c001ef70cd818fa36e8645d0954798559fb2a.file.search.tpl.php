<?php /* Smarty version Smarty-3.1.13, created on 2013-11-27 15:59:08
         compiled from "/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1538292317528a4323ca1d31-06379937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1c001ef70cd818fa36e8645d0954798559fb2a' => 
    array (
      0 => '/Users/migueloliveira/Dropbox/projects/sinf/webapp/templates/encomendas/search.tpl',
      1 => 1385563474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1538292317528a4323ca1d31-06379937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_528a4323d3ec38_74010886',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a4323d3ec38_74010886')) {function content_528a4323d3ec38_74010886($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesquisa Avançada</title>

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>

<body class="_search">
  <div class="row">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">

      <nav class="navbar navbar-default" role="navigation">
      </nav>

      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">
        <h2>Pesquisa Avançada</h2>
      </div>
      <div id="div_formSearch" class="col-lg-6">
    <form id="formSearch" method="post" >
      Codigo da encomenda: <input type="text" class="form-control" name="codEncomenda" pattern="\w*" />
      <br>
      Data do inicio: <input type="text" class="form-control" name="dateInit" placeholder="DD-MM-AAAA" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]<?php echo 4;?>
"/>
      Data de fim: <input type="text" class="form-control" name="dateEnd" placeholder="DD-MM-AAAA" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]<?php echo 4;?>
"/>
      <br>
      Preco: <input type="text" class="form-control" name="price" pattern="^(?=.*\d)\d*(?:\.\d\d)?$"/>
      <br>
      Artigos:
      <br>
      <table>
        <tr>
          <td>
            <input type="checkbox" id="rosas" value="Rosas"> Rosas
          </td>
          <td>
            <input type="checkbox" id="tulipas" value="Tulipas"> Tulipas
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" id="alecrim" value="Alecrim"> Alecrim
          </td>
          <td>
            <input type="checkbox" id="tesoura" value="Tesoura de Podar"> Tesoura de Podar
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" id="adubo" value="Adubo Floral"> Adubo Floral
          </td>
          <td>
            <input type="checkbox" id="criacao" value="Criacao de Arranjos Florais"> Criacao de Arranjos Florais
          </td>
        </tr>
      </table>
      <br>
      Morada: <input type="text" class="form-control" name="address"/>
      <br>
      Quantidade: <input type="number" class="form-control" name="quantidade" min="1" max="20"/>
      <br>
      <br>
      <input type="submit" class="btn btn-default" value="Procurar"/>
    </form>
  </div>
    </div>

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("../common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
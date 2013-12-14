<?php /* Smarty version Smarty-3.1.13, created on 2013-12-14 15:54:32
         compiled from "C:\xampp\htdocs\webapp\templates\encomendas\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11676529a3501cb1414-91412251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aed1faec74482aa161fc177c9fabe41673c3a18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\encomendas\\search.tpl',
      1 => 1386952694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11676529a3501cb1414-91412251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529a3501cf3aa1_55478349',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'artigos' => 0,
    'count' => 0,
    'third' => 0,
    'multi' => 0,
    'artigo' => 0,
    'typeUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529a3501cf3aa1_55478349')) {function content_529a3501cf3aa1_55478349($_smarty_tpl) {?><!DOCTYPE html>
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
       <div class="page-header">
        <h1>Pesquisa Avançada</h1>
      </div>

      <div id="div_formSearch" class="col-lg-6">
    <form id="formSearch" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/encomendas/search_list.php" enctype="multipart/form-data">
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
		<?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value){
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['count']->value==0||$_smarty_tpl->tpl_vars['count']->value==($_smarty_tpl->tpl_vars['third']->value*$_smarty_tpl->tpl_vars['multi']->value)||(($_smarty_tpl->tpl_vars['count']->value-($_smarty_tpl->tpl_vars['third']->value*$_smarty_tpl->tpl_vars['multi']->value))<1&&($_smarty_tpl->tpl_vars['count']->value-($_smarty_tpl->tpl_vars['third']->value*$_smarty_tpl->tpl_vars['multi']->value))>0)){?>
			<tr>
				<td>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['artigo']->value['codArtigo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo'];?>
 
				</td>
				
				<?php $_smarty_tpl->tpl_vars['multi'] = new Smarty_variable($_smarty_tpl->tpl_vars['multi']->value+1, null, 0);?>
				
			<?php }elseif($_smarty_tpl->tpl_vars['count']->value==($_smarty_tpl->tpl_vars['third']->value-1)||((($_smarty_tpl->tpl_vars['third']->value*$_smarty_tpl->tpl_vars['multi']->value)-$_smarty_tpl->tpl_vars['count']->value)<1&&(($_smarty_tpl->tpl_vars['third']->value*$_smarty_tpl->tpl_vars['multi']->value)-$_smarty_tpl->tpl_vars['count']->value)>0)){?>
				<td>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['artigo']->value['codArtigo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo'];?>
 
				</td>
			</tr>
			<?php }else{ ?>
				<td>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['artigo']->value['codArtigo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo'];?>
 
				</td>
			<?php }?>
			
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>
      </table>
	  <?php if ($_smarty_tpl->tpl_vars['typeUser']->value=='MANAGER'){?>
      <br>
      Morada: <input type="text" class="form-control" name="address"/>
	  <?php }?>
      <br>
      Quantidade: <input type="number" class="form-control" name="quantidade" min="1" max="20"/>
	  <br>
	  Estado da entrega:
	  <select name="state" class="form-control">
		<option value="none">Não especifico</option>
		<option value="a processar">A processar</option>
		<option value="a entregar">A entregar</option>
		<option value="anulada">Anulada</option>
		<option value="entregue">Entregue</option>
		<option value="paga">Paga</option>
		<option value="nao paga"> Não Paga </option>
	</select>
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
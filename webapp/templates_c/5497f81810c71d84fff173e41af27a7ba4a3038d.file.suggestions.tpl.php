<?php /* Smarty version Smarty-3.1.13, created on 2013-12-14 17:02:07
         compiled from "C:\xampp\htdocs\webapp\templates\encomendas\suggestions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1128452a24f713e6fd3-67342858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5497f81810c71d84fff173e41af27a7ba4a3038d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webapp\\templates\\encomendas\\suggestions.tpl',
      1 => 1387040524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128452a24f713e6fd3-67342858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a24f714257d2_62052585',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'artigos' => 0,
    'artigo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a24f714257d2_62052585')) {function content_52a24f714257d2_62052585($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <?php echo $_smarty_tpl->getSubTemplate ("../common/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  
</head>

<body class="_suggestion">

  <!-- <div class="row row-offcanvas row-offcanvas-left"> -->
  <div class="row">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="col-xs-12 col-sm-9 content">
      
      <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown sorting">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenar por <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
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

      <div class="container">
      <h1>Sugestões de Compra</h1>

    <div class="row" id="sugestao" style="width:90%">

     <?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value){
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
?>
        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4><?php echo $_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo'];?>
</h4>
                    <br/>
                    <p id="quantidadeSugest"><input type="number" placeholder="quantidade" class="form-control" style="width:80%" name="quantidade" min="1" max="20"/></p>
                    <p><a href="#" class="label label-danger" rel="tooltip" title="Comprar">Comprar</a></p>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Tulipas'){?>
                  <img src="../../img/suggestimg/tulipa.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Tesoura de Podar'){?>
                  <img src="../../img/suggestimg/turquesa.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Criação de Arranjos Florais'){?>
                  <img src="../../img/suggestimg/arranjos.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Rosas'){?>
                  <img src="../../img/suggestimg/rosaverm.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Alecrim'){?>
                  <img src="../../img/suggestimg/alecrim.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Margaridas'){?>
                  <img src="../../img/suggestimg/margarida.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Orquideas'){?>
                  <img src="../../img/suggestimg/orquidea.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Cravos'){?>
                  <img src="../../img/suggestimg/cravo.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Rosas Brancas'){?>
                  <img src="../../img/suggestimg/rosabranca.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Oliveira'){?>
                  <img src="../../img/suggestimg/oliveira.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Vasos'){?>
                  <img src="../../img/suggestimg/vasos.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Pá'){?>
                  <img src="../../img/suggestimg/pa.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Mangueira'){?>
                  <img src="../../img/suggestimg/mangueira.jpg" width="400" height="300" alt="...">
                <?php }elseif($_smarty_tpl->tpl_vars['artigo']->value['descricaoArtigo']=='Adubo Floral'){?>
                  <img src="../../img/suggestimg/adubo.jpg" width="400" height="300" alt="...">
                <?php }?>
            </div>
      </div>
    <?php } ?>
  </div>

    </div><!--/col-xs-12-->

  </div><!--/row-->

  <?php echo $_smarty_tpl->getSubTemplate ("common/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
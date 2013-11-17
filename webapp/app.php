<!DOCTYPE html>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="libs/calendar/Calendar.css">
        <meta charset="utf-8">
        <meta name="description" content="">

        <!-- Mobile web app stuff -->
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="cleartype" content="on">

        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <!-- <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
        <link rel="stylesheet" href="css/lungo.css">
        <link rel="stylesheet" href="css/lungo.icon.css">
        <link rel="stylesheet" href="css/lungo.theme.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

<!--codigo calendario -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery-1.9.1"></script>
<script src="jquery-ui-1.10.3.custom"></script>
<script src="jquery-ui-1.10.3.custom.min"></script>
<script>
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
</script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

        <section id="main" data-transition="slide" class="drag" data-aside="features">
            <header data-title="">
                <nav>
                    <a href="#" data-view-aside="features" data-icon="menu"></a>
                </nav>
                <nav class="on-right"></nav>
            </header>

            <article id="active" class="scroll">
                <p>This wll be the login page!</p>
            </article>
            
            <article id="in_progress" class="scroll">
                <div class="row content-header">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar encomenda..." onkeyup="narrowResults(this)">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
                <div class="row content-body">
                    <div class="panel panel-default">
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
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <p></p>
                        </div>
                    </div>
                </div>
            </article>

            <article id="history" class="list scroll">
                <div class="row content-header">
                    <div class="input-group">
                        <input type="text" class="form-control local-search" placeholder="Pesquisar encomenda...">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
                <div class="row content-body">
                    <div class="panel panel-default">
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
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <p></p>
                        </div>
                    </div>
                </div>
            </article>

            <article id="advanced_search" class="list scroll">
                <li>advanced_search</li>
            </article>

            <article id="calendary" class="list scroll">
                <li>
                  <?php include("libs/calendar/calendar.php"); ?>
                </li>
            </article>

            <article id="dashboard" class="list scroll">
                <li>dashboard</li>
            </article>

            <article id="logout" class="list scroll">
                <li>logout</li>
            </article>

            <article id="package-detail" class="list scroll">
                
            </article>

        </section>

        <aside id="features" data-transition="left">
            <header data-title="Username">
                <nav class="on-right">
                    <a href="#" class="buttons" data-icon="settings"></a>
                </nav>
            </header>
            <article class="list scroll active">
                <ul>
                    <li>
                        <input type="text" placeholder="Pesquisa por ID...">
                    </li>
                    <li data-view-article="in_progress" data-icon="list" class="sidebar-btn" data-title="Encomendas Ativas">
                        <div class="tag on-right">3</div>
                        <strong>Encomendas Ativas</strong>
                    </li>
                    <li data-view-article="history" data-icon="time" class="sidebar-btn" data-title="Histórico">
                        <div class="tag on-right">3</div>
                        <strong>Histórico</strong>
                    </li>
                    <li data-view-article="advanced_search" data-icon="search" class="sidebar-btn" data-title="Pesquisa Avançada">
                        <strong>Pesquisa Avançada</strong>
                    </li>
                    <li data-view-article="calendary" data-icon="calendar" class="sidebar-btn" data-title="Calendário">
                        <strong>Calendário</strong>
                    </li>
                    <li data-view-article="dashboard" data-icon="dashboard" class="sidebar-btn" data-title="Perfil Utilizador">
                        <strong>Perfil Utilizador</strong>
                    </li>
                    <li data-view-article="logout" data-icon="signout" class="sidebar-btn">
                        <strong>Logout</strong>
                    </li>
                </ul>
            </article>
        </aside>
    
        <!-- Templates -->

        <script id="tmpl-package-row" type="text/x-jquery-tmpl">
            <tr>
                <td class="package-id">${id}</td>
                <td>${DataInicio}</td>
                <td>${DataFim}</td>
                <td>?</td>
                <td><span class="value">${TotalMerc}</span></td>
                <td><button type="button" class="btn btn-default" data-package-id="${id}">+ detalhes</button></td>
            </tr>
        </script>

        <script id="tmpl-package-detail" type="text/x-jquery-tmpl">
            <div class="row content-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>ID: ${id}</h4>
                            <h5>Data início: ${DataInicio}</h5>
                            <h5>Data fim: ${DataFim}</h5>
                            <h5>Valor: ${TotalMerc}€</h5>
                        </div>
                        <div class="col-sm-6">
                            <h4>Estado</h4><span class="label label-primary">?</span>
                        </div>
                    </div>
                </div>
                <div class="row content-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Descrição</th>
                                        <th>Desconto</th>
                                        <th>Preço unitário</th>
                                        <th>Quantidade</th>
                                        <th>Total líquido</th>
                                        <th>Entregue</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <p></p>
                        </div>
                    </div>
        </script>

        <script id="tmpl-package-item-row" type="text/x-jquery-tmpl">
            <tr>
                <td>${CodArtigo}</td>
                <td>${DescArtigo}</td>
                <td>${Desconto}</td>
                <td>${PrecoUnitario}€</td>
                <td>${Quantidade}</td>
                <td>${TotalLiquido}€</td>
                <td>${Entregue}</td>
            </tr>
        </script>

        <!--/.fluid-container-->
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.tmpl.min.js"></script>
        <script src="js/vendor/quo.js"></script>
        <script src="js/vendor/lungo.js"></script>
        <script src="js/main.js"></script>
        <script type="libs/fullcalendar/fullcalendar.js"></script>
        <script type="libs/fullcalendar/fullcalendar.css"></script>

        <script>Lungo.init({});</script>
    </body>

    </html>
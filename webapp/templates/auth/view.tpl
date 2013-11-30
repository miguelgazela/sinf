
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil de Utilizador</title>

  {include file="common/css.tpl"}

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

    {include file="sidebar.tpl"}

    <div class="col-xs-12 col-sm-9 content">

      <div class="page-header">
        <h1><span class="glyphicon glyphicon-user"></span> {$user.NomeCliente} <small>código cliente: {$user.CodCliente}</small></h1>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <h4>Informação pessoal</h4>
          <div class="info">
            <p>Número de contribuinte: {$user.NumContribuinte}</p>
            <h5>Morada</h5>
            <address>
              {$user.Morada}<br>
              {$user.Local}, {$user.Codigo_Postal}<br>
              <abbr title="Telefone">Tlf:</abbr> {$user.Telefone}
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

  {include file="common/js.tpl"}


  <script>

  var data = {
    labels : {{$graph_data_keys}},
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : {$graph_data_values}
    }
    ]
  }

  var data2 = {
    labels : {{$graph_data_keys}},
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : {$graph_data_values_2}
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

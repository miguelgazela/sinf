
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

</head>

<body class="_profile">
  <div class="row">

    {include file="sidebar.tpl"}

    <div class="col-xs-12 col-sm-9 content">

      <div class="page-header">
        <h1><span class="glyphicon glyphicon-user"></span> {$user.NomeCliente} <small>código cliente: {$user.CodCliente}</small></h1>
      </div>

      <div class="container">
        <p>Contribuinte #{$user.NumContribuinte}</p>
        <address>
          {$user.Morada}<br>
          {$user.Local}, {$user.Codigo_Postal}<br>
          <abbr title="Telefone">Tlf:</abbr> {$user.Telefone}
        </address>
      </div>

      <!-- <canvas id="myChart" width="760" height="300"></canvas> -->
  
    </div>

  </div><!--/row-->

  {include file="common/js.tpl"}


  <script>
  var data = {
    labels : ["Janeiro 2013","Fevereiro 2013","Março 2013","Abril 2013","Maio 2013","Junho 2013","Julho 2013"],
    datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "#77cc33",
      pointColor : "#77cc33",
      pointStrokeColor : "#fff",
      data : [2,0,3,4,1,1,6]
    }
    ]
  }

    //Get the context of the canvas element we want to select
    var ctx = document.getElementById("myChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(data);


  </script>
</body>
</html>

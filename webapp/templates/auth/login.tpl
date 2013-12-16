
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

<style type="text/css">
  body { 
  background: url(http://localhost/webapp/img/login.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#loginBox {
  background-color: white;
opacity: 0.8;
padding-bottom: 10px;
max-width: 300px;
padding-top: 10px;
border-radius: 15px;
}
#blackdude{
  color: black;
  
}
.form-group.last { margin-bottom:0px; }
</style>

  {include file="common/css.tpl"}

</head>

<body class="login">
  <div id="imagetd">
   <img width="600" src="../../img/BelaFlor.png">
   </div>
   <div class="container" id="loginBox">
    <form role="form" id="login">
    <div id="blackdude">
    <span class="glyphicon glyphicon-lock" ></span> Login </div>
    <br/>
      <div class="form-group">
        <label for="inputUsernameEmail" id="blackdude">NIF</label>
        <input type="text" class="form-control" id="inputNif">
      </div>
      <div class="form-group">
        <label for="inputPassword" id="blackdude">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <button id="loginButton" type="submit" class="btn btn btn-default pull-right">LOGIN</button>
    </form>
  </div>

<footer id="footer">
   <img width="500" src="../../img/primavera_logo.png">
</footer>
  {include file="common/js.tpl"}
</body>
</html>

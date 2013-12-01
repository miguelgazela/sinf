
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

  {include file="common/css.tpl"}

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
  {include file="common/js.tpl"}
</body>
</html>

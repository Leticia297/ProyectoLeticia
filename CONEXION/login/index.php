<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <style>
   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #B695C0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-box {
    width: 400px;
    margin: 0 auto;
    background-color:#C0C0C0;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  }

  .login-box h2 {
    text-align: center;
    color: #333;
  }

  .login-box input[type="text"],
  .login-box input[type="password"],
  .login-box input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  .login-box input[type="submit"] {
    background-color: #9c27b0;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .login-box input[type="submit"]:hover {
    background-color: #ab47bc;
  }

  .user-image {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    display: block;
    border-radius: 50%;
  }

  .btn {
    display: inline-block;
    background-color: #7d2181;
    color: #fff;
    padding: 10px 30px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
  }

  .btn:hover {
    background-color: purple;
  }
  </style>
</head>

<body>
  <div class="login-box">
  <strong><h2>LOGIN</h2></strong>
    <center><img src="../imagenes/logo.png" alt="" width="180" height="180"></center>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
              <form action="validar_login.php" method="POST">
                <div class="mb-3">
                  <br>
                <center><strong><label for="nombreusuario" class="form-label">USUARIO:</label></strong></center>
                <br>
                  <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" placeholder="Usuario" required>
                </div>
                <div class="mb-3">
                <center><strong><label for="pas" class="form-label">CONTRASEÑA:</label></strong></center>
                <br>
                  <input type="password" class="form-control" id="pas" name="pas" placeholder="Contraseña" required>
                </div>
                <br>
                <center><button type="submit" class="btn btn-warning">Iniciar Sesión</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
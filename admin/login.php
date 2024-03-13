<?php
if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == "admin" && $password == "admin") {
    session_start();
    $_SESSION["user"] = "admin";
    header("Location: index.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login Page</title>
</head>
<body>
  <div class="container mt-5" style="max-width:700px;">
    <div class="login-form">
      <form action="login.php" method="post">
        <div class="form-field mb-4">
          <input class="form-control" type="text" name="username" placeholder="user name">
        </div>
        <div class="form-field mb-4">
          <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-field mb-4">
          <input class="btn btn-primary" type="submit" value="Login" name="login">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
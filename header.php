<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My ToDo Lists</title>
  </head>
  <body>
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="logo.jpg" alt="Logo" style="width: 50px;">
        </a>

        <ul>
          <li> <a href="main.php">Home</a></li>
          <li> <a href="about.php">About us</a></li>
          <li> <a href="main.php">Contact</a></li>
        </ul>

        <div class="header-login">
          <form action="main.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>

          <a href="register.php">Register</a>

          <form action="index.php" method="post">
            <button type="submit" name="Logout-submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>
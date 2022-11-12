<html>

<head>
  <title>lnwdee board</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" href="/assets/img/logo.ico" type="image/x-icon">
  <script src="/assets/js/jquery.min.js" charset="utf-8"></script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lnwdee board</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/shares">Shares</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="/">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="/users/logout">Logout</a></li>
          <?php else : ?>
            <li><a href="/users/login">Login</a></li>
            <li><a href="/users/register">Register</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <?php //Messages::display(); 
      ?>
      <!-- <?php //require($view);
            ?> -->
    </div>

  </div><!-- /.container -->
  <script src="/assets/js/bootstrap.js" charset="utf-8"></script>
</body>

</html>
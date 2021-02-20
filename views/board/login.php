<html>
<?php require 'layouts/header.php' ?>

<body>
  <?php require 'layouts/menu.php' ?>

  <div class="container">
    <?php Messages::display(); ?>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">User Login</h3>
        </div>
        <div class="panel-body">
          <form method="post" action="/board/users/login">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" />
              <?php if (isset($errors) && $errors->has('email')) : ?>
                <p class="text-danger"><?php echo $errors->first('email') ?></p>
              <?php endif ?>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" />
              <?php if (isset($errors) && $errors->has('password')) : ?>
                <p class="text-danger"><?php echo $errors->first('password') ?></p>
              <?php endif ?>
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
          </form>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
  <?php require 'layouts/footer.php' ?>
</body>

</html>
<html>
<?php require view('layouts.header') ?>

<body>
  <?php require view('layouts.menu') ?>

  <div class="container">

    <div class="row">
      <?php Messages::display(); ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Register User</h3>
        </div>
        <div class="panel-body">
          <form method="post" action="/board/users/register">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" />
              <?php if (isset($errors) && $errors->has('name')) : ?>
                <p class="text-danger"><?php echo $errors->first('name') ?></p>
              <?php endif ?>
            </div>
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
  <?php require view('layouts.footer') ?>
</body>

</html>
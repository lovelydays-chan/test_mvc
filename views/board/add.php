<html>
<?php require 'layouts/header.php'?>
<body>
<?php require 'layouts/menu.php'?>

<div class="container">

 <div class="row">
      <?php Messages::display(); ?>
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="panel-title">Share Something!</h3>
       </div>
       <div class="panel-body">
         <form method="post" action="<?php echo ROOT_PATH; ?>board/shares/add">
         	<div class="form-group">
         		<label>Share Title</label>
         		<input type="text" name="title" class="form-control" />
                <?php if (isset($errors) && $errors->has('title')):?>
                <p class="text-danger"><?=$errors->first('title')?></p>
              <?php endif?>
         	</div>
         	<div class="form-group">
         		<label>Body</label>
         		<textarea name="body" class="form-control"></textarea>
                <?php if (isset($errors) && $errors->has('body')):?>
                <p class="text-danger"><?=$errors->first('body')?></p>
              <?php endif?>
         	</div>
         	<div class="form-group">
         		<label>Link</label>
         		<input type="text" name="link" class="form-control" />
                <?php if (isset($errors) && $errors->has('link')):?>
                <p class="text-danger"><?=$errors->first('link')?></p>
              <?php endif?>
         	</div>
         	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
             <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>board/shares">Cancel</a>
         </form>
       </div>
     </div>
 </div>

</div><!-- /.container -->
<?php require 'layouts/footer.php'?>
</body>
</html>


<html>
<?php require 'layouts/header.php'?>
<body>
<?php require 'layouts/menu.php'?>

<div class="container">

 <div class="row">
  <?php Messages::display(); ?>
	  <div class="text-center">
		  <h1>Welcome To lnwdee Board</h1>
		  <p class="lead">ค้นหาสิ่งที่น่าสนใจ หรือ ร่วมแชร์กับชุมชนของเรา.. </p>
		  <a class="btn btn-primary text-center" href="<?php echo ROOT_PATH; ?>board/shares">Share Now</a>
	  </div>
 </div>

</div><!-- /.container -->
<?php require 'layouts/footer.php'?>
</body>
</html>

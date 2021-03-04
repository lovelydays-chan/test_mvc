<html>
<?php require view('layouts.header') ?>

<body>
	<?php require view('layouts.menu') ?>

	<div class="container">
			<?php Messages::display(); ?>
			<div class="text-center">
				<h1>Welcome To lnwdee Board</h1>
				<p class="lead">ค้นหาสิ่งที่น่าสนใจ หรือ ร่วมแชร์กับชุมชนของเรา.. </p>
				<a class="btn btn-primary text-center" href="/board/shares">Share Now</a>
	</div>

	</div><!-- /.container -->
	<?php require view('layouts.footer') ?>
</body>

</html>
<html>
<?php require view('layouts.header') ?>

<body>
	<?php require view('layouts.menu') ?>

	<div class="container">


			<?php Messages::display(); ?>
			<div>
				<?php if (isset($_SESSION['is_logged_in'])) : ?>
					<a class="btn btn-success btn-share" href="/board/shares/add">Share Something</a>
				<?php endif; ?>
				<?php foreach ($datas as $item) : ?>
					<div class="well">
						<h3><?php echo $item['title']; ?></h3>
						<small><?php echo $item['create_date']; ?></small>
						<hr />
						<p><?php echo $item['body']; ?></p>
						<br />
						<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
					</div>
				<?php endforeach; ?>
			</div>

	</div><!-- /.container -->
	<?php require view('layouts.footer') ?>
</body>

</html>
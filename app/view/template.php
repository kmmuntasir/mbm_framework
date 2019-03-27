<!DOCTYPE html>
<html>
<?php require('elements/head.php'); ?>
<body>

<div class="wrapper">
	<?php require('elements/header.php'); ?>
	<?php require('elements/nav.php'); ?>
	
	<div class="content">
		<?php require($page.'.php'); ?>
	</div> <!-- content end -->

	<?php require('elements/footer.php'); ?>
</div>
			<!-- ------ Scripts -->
</body>
</html>
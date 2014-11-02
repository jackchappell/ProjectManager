<?php
include_once '-includes/init.php';
$i = 0;
?>
<!DOCTYPE html>
	<html>
		<?php Template::get("Head"); ?>
	<body>
		<?php Template::get("Navigation"); ?>
		<div class="container">
			<div class="jumbotron">
			  <h1>My Projects</h1>
			</div>

			<div class="row">
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th>Project Name</th>
				      <th>Link</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php foreach(glob("*", GLOB_ONLYDIR) as $dir): ?> 
				  	<?php if(!(strpos($dir, '-') === 0)): ?>
					    <tr class="<?php echo ++$i % 2 === 0 ? "active" : ""; ?>">
					      <td><?= ucwords(str_replace("_", " ", $dir)) ?></td>
					      <td><a class="list-unstyled" href="<?= $dir ?>/">Open</a></td>
					    </tr>
			        <?php endif; ?>
				  <?php endforeach; ?>
				  </tbody>
				</table> 
	    	</div>

	    	<?php Template::get("Footer"); ?>

	    </div> <!-- End of container -->

		<!-- JS imports -->
		<script src="-vendor/assets/js/jquery.js"></script>
		<script src="-vendor/assets/js/bootstrap.js"></script>
	</body>
</htmL>
<?php snippet('head') ?>


<?php snippet('header') ?>

<main>
	<div class="container home-header">
		<div>
  			<div class="col-lg-6">
 				<h1><?= $page->headertext() ?></h1>
			</div>
  			<div class="col-lg-6">
 				<?php echo $page->body() ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="divider-small">
			<a href="#">Title Page</a>
			<hr>
		</div>
		<?php snippet('projects') ?>
	</div>	
	
</main>

<?php snippet('footer') ?>
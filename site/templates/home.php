<?php snippet('head') ?>


<?php snippet('header') ?>

<main>
<div class="container home-header">
	<div class= "row">
  		<div class="col-lg-6">
 			<h1><?= $page->headertext() ?></h1>
		</div>
  		<div class="col-lg-6">
 			<?php echo $page->body() ?>
		</div>
	</div>
</div>
</main>

<?php snippet('footer') ?>
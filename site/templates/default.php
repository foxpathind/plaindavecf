<?php snippet('head') ?>


<?php snippet('header') ?>


<div class="container">
	<div class="col-lg-4">
		<?php echo $site->title() ?>
  	</div>

  	<div class="col-lg-4">
 	<?php echo $site->text() ?>
	</div>

  	<div class="col-lg-4">
 	<?php echo $site->body() ?>
	</div>
</div>


<?php snippet('footer') ?>
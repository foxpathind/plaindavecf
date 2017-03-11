<?php
	$projects = page('projects')->children()->visible();
?>


<div class="row projects">
	<?php foreach ($projects as $project): ?>
	<div class="col-lg-6">
		<a href="<?php echo $project->url() ?>">
			<div class="project">
				<div class="project-image" style="background-color:<?php echo $project->bgcolor() ?>">
					<!--when using file chosen in the panel you need to use the toFile() function before you can work wiht it -->
					<?php echo thumb($project->cardimage()->toFile(), array('width'=> 500, 'height'=>350,'crop'=>true)) ?>
				</div>
				<div class="project-title">
					<h2><?php echo $project->title() ?> </h2>
				</div>
			</div>
		</a>
	</div>
    <?php endforeach ?>
</div>



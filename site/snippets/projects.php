<div class="row projects">
	<?php foreach ($page->children()->visible()->flip() as $project): ?>
	<div class="col-lg-4">

		<div class="project">
			<div class="project-image">
				<?php echo thumb($project->image(), array('width'=> 300)) ?>
			</div>
			<div class="project-title">
				<h2><?php echo $project->title() ?> </h2>
			</div>
		</div>
	</div>
    <?php endforeach ?>
</div>



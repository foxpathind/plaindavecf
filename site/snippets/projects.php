<div class="row projects">
	<?php foreach ($page->children()->visible()->flip() as $project): ?>
	<div class="col-lg-4">
		<a href="<?php echo $project->url() ?>">
			<div class="project">
				<div class="project-image" style="background-color:<?php echo $project->bgcolor() ?>">
					<?php echo thumb($project->image(), array('width'=> 300)) ?>
				</div>
				<div class="project-title">
					<h2><?php echo $project->title() ?> </h2>
				</div>
			</div>
		</a>
	</div>
    <?php endforeach ?>
</div>



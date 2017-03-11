<!--note that the code manipulates the background image with background-position that will NOT be right for every image. we could add filed values in kirby to position the image but it would be hard to do so in the panel where you can't see the image well.
-->

<header class="header-project" style="background: url('<?php echo $page->headerimage()->toFile()->url() ?>'); background-repeat:no-repeat;
    background-position:50% 15%;">
<div class="container">
	<div class="col-lg-2"> 
		<a href="<?php echo $site->url() ?>">
    <!-- here you can see how to get a file from the assets folder -->
		<img src="<?php echo kirby()->urls()->assets() . '/images/4alogo.png' ?>" width="90px">
		</a>
  	</div>

  	<div class="col-lg-10">
  	<nav>
  		<ul>
  		<?php foreach($pages->visible() as $item): ?>
  			<li><a href="<?php echo $item->url() ?>" class="<?php echo $page->headercolor()?>"> <?php echo html($item->title()) ?></a></li>
  		<?php endforeach ?>

		</ul>
	</nav>

  	
	</div>


</div>
</header>

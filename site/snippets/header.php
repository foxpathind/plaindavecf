<header>
<div class="container">
	<div class="col-lg-2">
		<a href="<?php echo $site->url() ?>">
		<img src="<?php echo kirby()->urls()->assets() . '/images/4alogo.png' ?>" width="90px">
		</a>
  	</div>

  	<div class="col-lg-10">
  	<nav>
  		<ul>
  		<?php foreach($pages->visible() as $item): ?>
  			<li><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
  		<?php endforeach ?>

		</ul>
	</nav>

  	
	</div>


</div>
</header>

<?php  if(APP != '566ae5ca-8684-4778-ae6c-4d163ed28ff1'){ exit; } ?>
<h1><?= $categorie->getLibCat(); ?></h1>
<ul class="list-group">
	<?php if(isset($topics) && $topics !== null ): ?>
		<?php foreach($topics as $topic): ?>
  			<li class="list-group-item">
  				<a href="<?= WEBROOT.'topic/details/'.$topic->getIdTop() ?>">
  					<?= $topic->getLibTop(); ?>
  				</a>
  			</li>
  		<?php endforeach; ?>
  	<?php endif; ?>
</ul>
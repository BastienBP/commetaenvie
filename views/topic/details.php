<?php  if(APP != '566ae5ca-8684-4778-ae6c-4d163ed28ff1'){ exit; } ?>
<h1><?= $topic->getLibTop(); ?></h1>
<ul class="list-group">
	<?php if(isset($posts) && $posts !== null ): ?>
		<?php foreach($posts as $post): ?>
  			<li class="list-group-item">
  				<a href=""></a>
  			</li>
  		<?php endforeach; ?>
  	<?php endif; ?>
</ul>
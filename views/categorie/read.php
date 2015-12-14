<?php  if(APP != '566ae5ca-8684-4778-ae6c-4d163ed28ff1'){ exit; } ?>
<h1>Catégories</h1>

<ul class="list-group">
	<?php foreach($categories as $categorie): ?>
  		<li class="list-group-item">
  			<a href="<?= WEBROOT.'categorie/details/'.$categorie->getIdCat(); ?>">
  				<?= $categorie->getLibCat(); ?>
  			</a>
  		</li>
  	<?php endforeach; ?>
</ul>
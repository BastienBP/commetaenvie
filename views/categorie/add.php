<h1>Ajout Catégorie</h1>
<?php 
if(isset($msg))
	echo $msg;
?>
<form class="form-group" method="post">
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">Libelle</span>
  		<input type="text" name="libCat" class="form-control"  aria-describedby="basic-addon1">
	</div>
	<br />
	<div class="input-group">
  		<button type="submit" class="btn btn-primary">Enregistrer</button>
	</div>
</form>
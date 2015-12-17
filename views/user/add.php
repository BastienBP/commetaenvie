<h1>Ajout Utilisateur</h1>
<?php 
if(isset($msg))
	echo $msg;
?>

  <div class="panel-body">
    <form class="form-group" method="post">
      <div class="input-group input-group-md">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <input type="text" class="form-control" name="email" placeholder="exemple@mail.com" required="required"/>
      </div><br />
      

      <div class="input-group input-group-md">
        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="libUser" placeholder="Pseudo" required="required"/>
      </div><br />

      <div class="input-group input-group-md">
        <span class="input-group-addon"class="glyphicon glyphicon-lock"  id="sizing-addon1"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required"/>
      </div><br />

      <div class="input-group input-group-md">
        <span class="input-group-addon"class="glyphicon glyphicon-lock"  id="sizing-addon1"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" name="password_confirm" placeholder="Confirmer" required="required"/>
      </div><br />
      <div align="right">
      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Enregistrer</button></div>
    </form>

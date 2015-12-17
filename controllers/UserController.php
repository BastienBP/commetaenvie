<?php 
class UserController extends ControllerCore{


	public function readAction(){
		$d['user'] = UserDao::getAll();
		$this->set($d);
		$this->render('read');
	}


	public function addAction(){
		if(isset($_POST['libUser'])){
			$lib = $_POST['libUser'];
			if(preg_match("#[\w]{3,45}#", $lib)){
				$user = new UserModel();
				$user->setLibUser($lib);
				$user->save();
				$d['msg'] = '<div class="alert alert-success">Utilisateur Ajoutée</div>';
			}else{
				$d['msg'] = '<div class="alert alert-danger">Utilisateur Non Ajoutée</div>';
			}
			$this->set($d);
		}
		$this->render('add');			
	}

	


}
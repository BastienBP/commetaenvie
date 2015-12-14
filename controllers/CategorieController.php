<?php 
class CategorieController extends ControllerCore{


	public function readAction(){
		$d['categories'] = CategorieDao::getAll();
		$this->set($d);
		$this->render('read');
	}

	public function detailsAction($data){
		$d['topics'] = TopicDao::getByIdCat($data);
		$d['categorie'] = CategorieDao::getByIdCat($data);
		$this->set($d);
		$this->render('details');
	}

	public function addAction(){
		if(isset($_POST['libCat'])){
			$lib = $_POST['libCat'];
			if(preg_match("#[\w]{3,45}#", $lib)){
				$categorie = new CategorieModel();
				$categorie->setLibCat($lib);
				$categorie->save();
				$d['msg'] = '<div class="alert alert-success">Catégorie Ajoutée</div>';
			}else{
				$d['msg'] = '<div class="alert alert-danger">Catégorie Non Ajoutée</div>';
			}
			$this->set($d);
		}
		$this->render('add');			
	}

	


}
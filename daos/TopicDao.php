<?php 
class TopicDao{
	private static $table = 'topic';
	private static $view = 'categories_topics';
	private static $global_view = 'categories_topics';

	public static function getAll(){
		$rows = DaoCore::get('*',self::$table);
		$topics = array();
		foreach($rows as $row){
			$topic = new TopicModel();
			$topic->hydrate($row);
			array_push($topics,$topic);
		}
		return $topics;
	}

	public static function getByIdCat($idCat){
		$rows = DaoCore::find('*',self::$view,['idCat' => $idCat],'',' = ');
		$topics = array();
		foreach($rows as $row){
			$categorie = new CategorieModel();
			$categorie->hydrate($row);
			$topic = new TopicModel();
			$topic->hydrate($row);
			$topic->setCategorie($categorie);
			array_push($topics,$topic);
		}
		return $topics;
	}

	public static function getByIdTop($idTop){
		$rows = DaoCore::find('*',self::$global_view,['idTop' => $idTop],'',' = ');
		$topics = array();
		foreach($rows as $row){
			$categorie = new CategorieModel();
			$categorie->hydrate($row);
			$topic = new TopicModel();
			$topic->hydrate($row);
			$topic->setCategorie($categorie);
			array_push($topics,$topic);
		}
		return $topics[0];
	}
	

}
<?php 
class CategorieDao{
	private static $table = 'categorie';

	public static function add($categorie){
		DaoCore::insert(['idCat'=>'','libCat'=> $categorie->getLibCat()],self::$table);
	}

	public static function update($categorie){
		$dbc = DaoCore::dbConnect();
		$query = "UPDATE self::$table SET libCat = :libCat WHERE idCat = :idCat;"; 
		$req = $db->prepare($query);
        $req->execute([
        	'idCat'=>$categorie->getIdCat(),
        	'libCat'=>$categorie->getLibCat()
        	]);
        $db = null;
        return $array;
	}

	public static function getAll(){
		$rows = DaoCore::get('*',self::$table);
		$categories = array();
		foreach($rows as $row){
			$categorie = new CategorieModel();
			$categorie->hydrate($row);
			array_push($categories,$categorie);
		}
		return $categories;
	}

	public static function getByIdCat($idCat){
		$rows = DaoCore::find('*',self::$table,['idCat' => $idCat],'',' = ');
		$categories = array();
		foreach($rows as $row){
			$categorie = new CategorieModel();
			$categorie->hydrate($row);
			array_push($categories,$categorie);
		}
		return $categories[0];
	}

}
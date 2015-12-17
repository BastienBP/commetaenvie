<?php 
class UserDao{
	private static $table = 'user';

	public static function add($user){
		DaoCore::insert(['idU'=>'','pseudo'=> $user->getLibUser(),'mail'=> $user->getEmail(), 'pass'=>getPassword()],self::$table);
	}

	public static function update($user){
		$dbc = DaoCore::dbConnect();
		$query = "UPDATE self::$table SET libUser = :libUser WHERE idUser = :idUser;"; 
		$req = $db->prepare($query);
        $req->execute([
        	'idUser'=>$user->getIdUser(),
        	'libUser'=>$user->getLibUser()
        	]);
        $db = null;
        return $array;
	}

	public static function getAll(){
		$rows = DaoCore::get('*',self::$table);
		$users = array();
		foreach($rows as $row){
			$user = new UserModel();
			$user->hydrate($row);
			array_push($users,$user);
		}
		return $users;
	}

	public static function getByIdUser($idUser){
		$rows = DaoCore::find('*',self::$table,['idUser' => $idUser],'',' = ');
		$users = array();
		foreach($rows as $row){
			$user = new UsergorieModel();
			$user->hydrate($row);
			array_push($users,$user);
		}
		return $users[0];
	}

}
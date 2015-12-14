<?php 
class DaoCore{

	/*
     * Connexion a la database
     */
    public static function dbConnect(){
        try{
            $dbc = new PDO('mysql:host='.DB_ADDRESS.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_LOGIN, DB_PASSWORD);
            return $dbc;
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }



    /*
     * Prend en entrée des colones séparées par des virgules et retourne un tbleau de résultat
     */
    public static function get($col,$table)
    {
        $query = 'SELECT '.$col.' FROM '.$table;
        $db = self::dbConnect();
        $res = $db->query($query);
        if($res !== false){
            $array = $res->fetchAll();
        }
        $db = null;
        return $array;
    }

    /*
     * Prend en entrée un tableau avec key (précisez ':' avant la key) => value
     */
    public static function insert($array,$table)
    {
        $query = "INSERT INTO ".$table." VALUES( ";
        $i = 0 ;
        foreach ($array as $key => $value) {
            if($i == 0){
            $query = $query.':'.$key;
            }
            else{
              $query = $query. ", :".$key;
            }
            $i++;
        }
        $query = $query. ")";
        $db = self::dbConnect();
        $req = $db->prepare($query);
        $req->execute($array);
        $db = null;
    }

    /*
     * Prend en entrée les champs recherchés (séparés par des virgules), la table, les conditions (key = nom du champs => value = valeur rechercher),
     * logic : opérateur logic AND ou OR, la relation : = ou < ou LIKE ...
     */
    public static function find($champs, $table, $conditions, $logic, $relation)
    {
        $query = 'SELECT '.$champs.' FROM '.$table.' WHERE ';
        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i == 0){
                $query = $query." ".$key." ".$relation." ".$value;
            }
            else{
                 $query = $query." ".$logic." ".$key." ".$relation." ".$value;
            }
            $i++;
        }
        $db = self::dbConnect();
        $req = $db->query($query);
        if($req !== false){
            $result = $req->fetchAll();    
        }
        $db = null;
        return $result;
    }







    /*
    *   Fonction qui prend en entré le nom de la fonction stocké sql,
    *   les champs et renvoie le resultat sous forme de tableau
    */
    public static function callFunction($nomF, $fields)
    {
        $query = "SELECT ".$nomF."(";
        $i = 0;
        foreach($fields as $key => $value)
        {
            if($i == 0)
            {
                $query = $query . " :".$key." ";
            }
            else
            {
                $query = $query . ", :".$key." " ;
            }
            $i ++;
        }
        $query = $query . ")";
        $db = self::dbConnect();
        $req = $db->prepare($query);
        $req->execute($fields);
        $result = $req->fetchAll();
        $db = null;
        return $result;
    }


}
<?php
class UrlCore{
	public static function load_url($urls,$uri){
		foreach($urls as $url => $link){
			if(preg_match($url, $uri)){
				$params = explode('/',$link);
				$c = new $params[0]();
				$action = $params[1].'Action';
				
				$data = explode('/',$uri);

				if(sizeof($data) > 2){
					$c->$action($data[2]);
				}else{
					$c->$action();
				}
				return true;
			}
		}
		require ROOT.'layouts/404.php';
		return false;
	} 
}
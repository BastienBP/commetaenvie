<?php 
class TopicController extends ControllerCore{
	
	public function detailsAction($data){
		$d['topic'] = TopicDao::getByIdTop($data);
		$this->set($d);
		$this->render('details');
	}
	

}
<?php
class Application {
	
	public $html = '';
	public $route = Array();
	
	public function render(){
		return $this->loadController();
	}
	
	public function setRoute($r){
		$arr=explode('?',$r);
		$this->route = explode('/', $arr[0]);
	}
	
	public function loadController(){
		require_once($_SERVER['DOCUMENT_ROOT'].'/controller/'.$this->route[0].'/'.$this->route[1].'.php');
		$str='Controller_'.$this->route[0].'_'.$this->route[1];
		$controller = new $str();
		if(isset($route[2])){
			$controller->$this->route[2]();
		}else{
			$controller->index();
		}
	}
}

?>
<?php
class View {
	public $template = '';
	public $view = Array();
	public function render(){
		ob_start();
		$view = $this->view;
		include($_SERVER['DOCUMENT_ROOT'].'/view/template/'.$this->template.'/default.php');
		$html = ob_get_contents();
	}
}

?>
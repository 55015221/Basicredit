<?php 
class PublicAction extends Action{
	
	public function _empty(){		
		
		Header('Location:Public:/404.html');
	}
	
	public function _404(){
		
		$this->display(THEME_PATH .'404.html');
	}
	
	public function _initialize(){
		/* $config = M('config');
		$c=$config->find(1);
		F('config',$c ,'./Public/Data/'); */
		$config = F('config','','./Public/Data/');
		$this->assign('config' ,$config);
		self::header();
		self::footer();
		self::left();
	}
	
	public function header() {	
		$Col = M('column');
		$column =$Col->field(true)->where(array('parent_id'=>0 ,'show'=>1))->order(array('sort'=>'asc'))->select();
		$action = ACTION_NAME;	
		$curColumn =$Col->field(true)->where(array('action'=>$action))->find();
		$this->assign('curColumn',$curColumn);
		$this->assign('column',$column);
		
		//$this->display(THEME_PATH .'header.html');
	}
	
	public function footer() {
		
		//$this->display(THEME_PATH .'footer.html');
	}
	
	public function left() {
		
	}
	
	public function sitenav(){
		
		
		$this->assign();
	}
}
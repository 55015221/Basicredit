<?php 
class EmptyAction extends Action{
	/**
	 * @todo 空模块 找不到模块时自动调用此方法
	 * return 404;
	 */
	public function index(){
		send_http_status(404);
		$this->display(URL_404_REDIRECT);
	}
}
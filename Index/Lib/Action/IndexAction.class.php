<?php
class IndexAction extends PublicAction {
    public function index(){
    	
    	$Slide =M('slider');    	
    	$slider =$Slide->field(true)->select();    	
    	$this->assign('slider', $slider);
    	
    	$Col =M('column');
    	$index_id =$Col->field(true)->where(array('action'=>'about'))->find();
    	$index_list =$Col->field(true)->where(array('parent_id'=>$index_id['id']))->order('id asc')->find();
    	$Art =M('article');
    	$Index_about =$Art->field(true)->where(array('parent_id'=>$index_list['id']))->find();
    	$Index_about['content'] =blog_summary($Index_about['content'],300);
    	$this->assign('Index_about', $Index_about);

    	
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'index.html');
    	$this->display(THEME_PATH.'footer.html');	
    }
    
    public function about(){
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    					?empty($list['child'][0]['id'])
    					?$list['id']
    					:$list['child'][0]['id']
    					:$_GET['id'];
    		$article =$Art->field(true)->where(array('parent_id'=>$view_id))->find();

    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    	}
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function news(){
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    					?empty($list['child'][0]['id'])
    					?$list['id']
    					:$list['child'][0]['id']
    					:$_GET['id'];
    		$article =$Art->field(true)->where(array('parent_id'=>$view_id))->select();
    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    		$this->assign('islist', true);
    	}
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function products(){
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    					?empty($list['child'][0]['id'])
    					?$list['id']
    					:$list['child'][0]['id']
    					:$_GET['id'];
    		$article =$Art->field(true)->where(array('parent_id'=>$view_id))->find();
    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    	}
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function connect(){
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    					?empty($list['child'][0]['id'])
    					?$list['id']
    					:$list['child'][0]['id']
    					:$_GET['id'];
    		$article =$Art->field(true)->where(array('parent_id'=>$view_id))->find();

    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    	}
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function jobs(){
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    		?empty($list['child'][0]['id'])
    		?$list['id']
    		:$list['child'][0]['id']
    		:$_GET['id'];
    		$article =$Art->field(true)->where(array('parent_id'=>$view_id))->find();
    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    	}
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function view(){
    	$viewid =$_GET['id'];
    	$action =ACTION_NAME;
    	if($action != 'index'){
    		if('view' == $action){
    			$action ='news';
    		}
    		$Col =M('column');
    		$list = $Col->field(true)->where(array('action'=>$action))->find();
    		$list['child'] =$Col->field(true)->where(array('parent_id'=>$list['id']))->order('id asc')->select();
    		$Art =M('article');
    		$view_id = empty($_GET['id'])
    		?empty($list['child'][0]['id'])
    		?$list['id']
    		:$list['child'][0]['id']
    		:$_GET['id'];
    		$Art =M('article');
    		$article =$Art->field(true)->where(array('id'=>$viewid))->find();
    		$this->assign('article' ,$article);
    		$this->assign('list', $list);
    	}
    	
    	$this->display(THEME_PATH.'header.html');
    	$this->display(THEME_PATH.'view-list.html');
    	$this->display(THEME_PATH.'footer.html');
    }
    
    public function demo(){
    	$str ='sdas
    	dad&nbs<br>p;&nbsp;dad';
    	
    	echo htmlentities($str);
    	echo '<br>';
    	echo htmlspecialchars_decode($str);
    }
}
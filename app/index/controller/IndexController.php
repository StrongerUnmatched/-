<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Blog;


class IndexController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}
	public function index()
	{
		$data = $this->blog->blogList();
		$page = $this->blog->url();
		$this->assign('data',$data);
		$this->assign('page',$page);
		//模板名称和当前方法名称一致
		$this->display();
	}


}
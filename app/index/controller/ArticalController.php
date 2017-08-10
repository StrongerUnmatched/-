<?php
/**
 * @Author: Marte
 * @Date:   2017-06-17 16:51:31
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-20 14:09:55
 */
namespace index\controller;

use index\controller\BaseController;
use index\model\blog;

class  ArticalController  extends BaseController
{
    protected $content;
    public function __construct()
    {
        parent::__construct();
        if (empty($_SESSION['username'])) {
            $this->error('没有登陆');
        }

    }

    public function _init()
    {
        $this->content = new Blog();
    }

    public function artical()
    {
        $data = $this->content->arti();
        if (!empty($_SESSION['username'])) {
           $name = $_SESSION['username'];
           $this->assign('name',$name);
        }

        $data = $data['0'];
        $hui = $this->content->repeat();
        // var_dump($hui);
        $this->assign('data',$data);

        $this->assign('hui',$hui);
        $this->display();

    }

    public function repost()
    {
        $result = $this->content->hui();
        if ($result) {
            $this->success('回复成功');
        }else{
            $this->error('回复失败');
        }

    }


}
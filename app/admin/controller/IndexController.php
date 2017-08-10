<?php
/**
 * @Author: Marte
 * @Date:   2017-06-19 10:58:26
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-20 09:21:59
 */
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\Blog;

class IndexController extends BaseController
{
    protected $blog;
    public function _init()
    {
        $this->blog = new Blog();
    }
    public function index()
    {
        $username = $_SESSION['username'];
        $this->assign('username',$username);
        //模板名称和当前方法名称一致
        $this->display();
    }
    public function page()
    {

        //模板名称和当前方法名称一致
        $this->display();
    }

    public function post()
    {
        $data = $this->blog->bloglist();
        $this->assign('data',$data);
        //模板名称和当前方法名称一致
        $this->display();
    }

    public function  rpost()
    {
        $data = $this->blog->repeat();
        // var_dump($data);
        $this->assign('data',$data);
        $this->display();
    }

    public function pagecheck()
    {
        if (empty($_POST['title']) || empty($_POST['content'])) {
            $this->error('您还没写内容呢,请书写您要发表的博文');
        }
        $result = $this->blog->blogadd();
        // var_dump($result);
        if ($result) {
            $this->success('博文添加成功');
        }else{
            exit('博文添加失败');
            $this->error('博文添加失败');
        }

    }

    public function postdelete()
    {

        if (empty($_POST['id'])) {
            $this->error('请选择您要删除的内容');
        }

        $result = $this->blog->blogdelete();
        if ($result) {
            $this->success('博文删除成功');
        }else{
            $this->error('博文删除失败');
        }

    }

    public function rpostdelete()
    {

        if (empty($_POST['id'])) {
            $this->error('请选择您要删除的内容');
        }

        $result = $this->blog->blogdelete();
        if ($result) {
            $this->success('评论删除成功');
        }else{
            $this->error('评论删除失败');
        }

    }

}
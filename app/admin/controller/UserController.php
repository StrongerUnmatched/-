<?php
/**
 * @Author: Marte
 * @Date:   2017-06-19 14:10:22
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-19 16:15:27
 */
namespace admin\controller;

use admin\controller\BaseController;
use framework\VerifyCode;
use admin\model\User;

class UserController extends BaseController
{
    protected $user;

    public function _init()
    {
        $this->user = new User();
    }

    public function user()
    {
        $data = $this->user->userlist();
        $this->assign('data',$data);
       //模板名称和当前方法名称一致
       $this->display();
    }

    public function userdel()
    {
        if (empty($_POST['id'])) {
            $this->error('请选择您要删除的内容');
        }
        $result = $this->user->userdelete();
        if ($result) {
            $this->success('无用的用户已删除');
        }else{
            $this->error('删除失败');
        }
    }
}
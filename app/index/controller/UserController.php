<?php
/**
 * @Author: Marte
 * @Date:   2017-06-17 09:34:45
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-23 17:19:08
 */
namespace index\controller;

use index\controller\BaseController;
use framework\VerifyCode;
use index\model\User;

class UserController extends BaseController
{
    protected $user;

    public function _init()
    {
        $this->user = new User();
    }

    public function login()
    {
        $this->display();
    }
    public function yzm()
    {
        $vc = new VerifyCode();
        $vc->outputImage();
        $_SESSION['code'] = $vc->getCode();
    }

    public function doLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $code = $_POST['code'];
        if (strcasecmp($code, $_SESSION['code'])) {
           $this->error('验证码错误');
           exit;
        }
        $result = $this->user->checkLogin($username,$password)[0];

        if ($result && count($result) > 0 ) {
            unset($_SESSION['code']);
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $result['type'];
            $_SESSION['uid'] = $result['uid'];
            $this->success('登录成功！','http://www.syd123.com');
        }else{
            $this->error('登录失败');
        }

    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        $this->success('退出成功','http://www.syd123.com');
    }

    public function register()
    {
        $this->display();
    }


    public function doRegister()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dopassword = $_POST['dopassword'];
        $email = trim($_POST['email']);

        //1 用户名是否重复
        if ($this->user->usernameRepeat($username)) {
            // var_dump($data);
            $this->error('用户名重复');
        }

        if ($password !== $dopassword) {
           $this->error('两次密码不一致');
        }

        //验证email是否合法，用正则匹配比较
        $patTern = '/\w+\@(\w+\.)(com|cn|net|edu)$/i';

        if(!preg_match($patTern, $email)){

           $this->error('请输入正确的邮箱');
        }
        $data['username'] = $username;
        $data['password'] = md5($password);
        $data['email']    = $email;
        $data['creeatetime'] = date('Y-m-d H:i:s',time());

        $result = $this->user->checkRegister($data);
        if (!$result){
           $this->error('注册失败');
        }
        $_SESSION['username'] = $username;
        $_SEESION['password'] = $password;
        $result = $this->user->checkLogin($username,$password)[0];
        $_SESSION['type'] = $result['type'];
        $_SESSION['uid']  = $result['uid'];
        $this->success('注册成功','http://www.syd123.com');

    }


}




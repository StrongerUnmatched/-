<?php
/**
 * @Author: Marte
 * @Date:   2017-06-17 14:39:32
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-17 16:22:29
 */
namespace index\model;
use framework\Model;

class User extends Model
{
    public function checkLogin($username,$password)
    {
        $password = md5($password);
        return $this->where("username='$username' and password='$password'")
                     ->limit('1')
                     ->field('uid,username,type')
                     ->select();
    }

    public function usernameRepeat($username)
    {
        $data =  $this->where("name='$username'")->select();
        //1如果用户存在返回true，否则返回fale
        return !empty($data[0]);
    }

    public function checkRegister($data)
    {
        // var_dump($data);
        return $this->insert($data);

    }
}

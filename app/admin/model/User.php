<?php
/**
 * @Author: Marte
 * @Date:   2017-06-17 14:39:32
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-06-20 14:31:51
 */
namespace admin\model;
use framework\Model;

class User extends Model
{
    public function userlist()
    {
        return $this->field('uid,username,email,createtime')->where('type=0')->select();

    }

    public  function userdelete()
    {
        $id = $_POST['id'];

        foreach ($id as $key => $value) {
            $result = $this->where("uid='$value'")->delete();
        }
        return $result;
    }

}

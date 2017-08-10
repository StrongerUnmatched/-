<?php
namespace admin\model;
use framework\Model;
class Blog extends Model
{
	public function blogList()
    {
        return $this->field('bid,title,createtime')->where('first=1')->select();
    }

    public function blogadd()
    {
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['time'] = time();
        return $this->insert($data);

    }

    public  function  blogdelete()
    {
        $id = $_POST['id'];

        foreach ($id as $key => $value) {
            $result = $this->where("bid='$value'")->delete();
        }
        return $result;
    }

    public function repeat()
    {
        $data = $this->where(["first=0","b.uid=u.uid"])->table("user u,php_blog b")->field('bid,title,b.createtime,content,b.uid,username,b.rid')->select();
        return $data;
    }

}
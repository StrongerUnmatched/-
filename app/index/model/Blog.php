<?php
namespace index\model;
use framework\Model;
use framework\Page;
class Blog extends Model
{
    function totlepage()
    {
        $date = $this->field('bid')->where('first=1')->select();
        return count($date);
    }

    function pageObj()
    {
        $obj = new Page($this->totlepage(),3);
        return $obj;
    }

    public function blogList()
	{
		return $this->limit($this->pageObj()->limit())->field('bid,title,createtime')->where('first=1')->select();
	}

    public function url()
    {
        return $this->pageObj()->allPage();
    }

    public function arti()
    {
        $bid = $_GET['id'];
        $data = $this->where("bid='$bid' and first=1")->limit('1')->field('bid,title,createtime,content,uid')->select();
        return $data;
    }

    public function hui()
    {
        // var_dump($_SESSION);
        $data['content'] = trim($_POST['content']);
        if (empty($data['content'])) {
            return false;
        }
        $data['rid'] = $_GET['id'];
        $data['title'] = 'wu';
        $data['first'] = '0';
        $data['createtime'] = date('Y-m-d H:i:s',time());
        $data['uid'] = $_SESSION['uid'];
        $result = $this->insert($data);

        return $result;
    }

    public function repeat()
    {
        $bid = $_GET['id'];
        $data = $this->where(["rid='$bid'","first=0","b.uid=u.uid"])->table("user u,php_blog b")->field('bid,title,b.createtime,content,b.uid,username')->select();
        return $data;
    }

    public function users($id)
    {
        $result = $this->where("uid='$id'")->field('username')->table("user")->select();
        return $result[0];
    }

}
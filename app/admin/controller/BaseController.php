<?php
//写命名空间 模块名\\congroller
namespace admin\controller;

use framework\Template;//引入名空间
class BaseController extends Template
{
	public function __construct()
	{

		parent::__construct('cache/admin','app/admin/view');
		if (empty($_SESSION['username'])) {
            $this->error('没有登陆','http://www.syd123.com');
            exit;
        }
		$this->_init();
	}

	//子类的初始化方法
	public function _init()
	{

	}

	public function display($viewFile=null,$isExtract=true)
	{
		if (empty($viewFile)) {
			$viewFile = $_GET['c'].'/'.$_GET['a'].'.html';
		}
		parent::display($viewFile,$isExtract);
	}

	/**
	 * [notice 信息提示]
	 * @param  [type]  $msg  [消息]
	 * @param  integer $code [成功是1，失败是0]
	 * @param  [type]  $url  [跳转地址]
	 * @param  integer $wait [等候秒数]
	 * @return [type]        [无]
	 */
	public function notice($msg,$code=1,$url=null,$wait=3)
	{
		if (empty($url)) {
			$url = $_SERVER['HTTP_REFERER'];
		}

		include "app/admin/view/notice.html";
	}

	/**
	 * [success 成功时通知]
	 * @param  [type]  $msg  [消息]
	 * @param  [type]  $url  [跳转地址]
	 * @param  integer $wait [等候秒数]
	 * @return [type]        [无]
	 */
	public function success($msg,$url=null,$wait=3)
	{
		$this->notice($msg,1,$url,$wait);
	}

	/**
	 * [error 失败时通知]
	 * @param  [type]  $msg  [消息]
	 * @param  [type]  $url  [跳转地址]
	 * @param  integer $wait [等候秒数]
	 * @return [type]        [无]
	 */
	public function error($msg,$url=null,$wait=3)
	{
		$this->notice($msg,0,$url,$wait);
	}
}

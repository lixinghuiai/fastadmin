<?php
namespace app\common\model;

use think\Model;

/**
 * 会员模型
 */
class Testname Extends Model
{
	public function index(){
		$data = model('Testname')->select();
		return $data;
	}
	 public function User()
    {
    	$data=model('User')->select();
    	return $data;
    }
}
?>
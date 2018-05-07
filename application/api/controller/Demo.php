<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Testname;
/**
 * 示例接口
 */
class Demo extends Api
{

    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['*'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = [''];

    /**
     * 无需登录的接口
     * 
     */
    public function test1()
    {
        $this->success('返回成功', ['action' => 'test1']);
    }
    
  
    /**
     * 需要登录的接口
     * 
     */
    public function test2()
    {
        $this->success('返回成功', ['action' => 'test2']);
    }

    /**
     * 需要登录且需要验证有相应组的权限
     * 
     */
    public function test3()
    {
        $this->success('返回成功', ['action' => 'test3']);
    }
     public function test4()
    {   
    	  
    	$model =new Testname();
    	$data = $model->index();
        $this->success('返回成功', $data);
    }
}

<?php
namespace app\app_extend\controller\wechat;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

}

<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/10/31
 * @Time: 16:29
 */
class MY_Controller extends CI_Controller
{
    protected $a;
    protected $data;
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('common');
    }
}


/**
 * Class BackBase 后台控制器基类
 */
class BackBase extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->a = 'back';

        $this->load->model('privilege_model');

        $this->data['menu'] = $this->getMenu();
        $this->data['curr_priv'] = $this->privilege_model->getPrivilegeByClassAndFunction($this->uri->rsegment(1), $this->uri->rsegment(2));

    }

    /**
     * 获取后台左侧菜单栏数据
     *
     * @return mixed
     */
    public function getMenu()
    {
        //$data = $this->privilege_model->getTree(0, 1, 2);

        $data = $this->privilege_model->oGetTree(0, 1, 2);

        return $data;
    }
}

/**
 * Class FrontBase 前台控制器基类
 */
class FrontBase extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->a = 'front';
    }
}
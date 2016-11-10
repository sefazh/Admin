<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/9
 * @Time: 11:08
 */
class Json extends BackBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('test/json');
    }

    public function get()
    {
        $this->data['num'] = 5;
        $this->load->view('test/jsonp', $this->data);
    }
}
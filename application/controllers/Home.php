<?php

/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/10/28
 * Time: 18:00
 */
class Home extends BackBase
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('privilege_model');
    }

    public function index()
    {

        $this->load->view('home/dashboard', $this->data);

    }

}
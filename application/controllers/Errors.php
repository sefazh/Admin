<?php

/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/10/31
 * Time: 14:35
 */
class Errors extends CI_Controller
{
    /**
     * 404
     */
    public function not_found()
    {
        $this->load->view('errors/404');
    }
}
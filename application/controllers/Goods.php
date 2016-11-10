<?php

/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/10/31
 * Time: 16:28
 */
class Goods extends BackBase
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('goods_model');
    }

    public function lst()
    {

        $this->data['list'] = $this->goods_model->get_all();

        $this->load->view('goods/responsive-table', $this->data);

    }

    public function detail()
    {
        $id = $this->input->get();

//        dump($id);

        $this->load->view('goods/form', $this->data);
    }
}
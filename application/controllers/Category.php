<?php

/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/10/31
 * Time: 16:28
 */
class Category extends BackBase
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('category_model');
    }

    public function lst()
    {

        $this->data['list'] = $this->category_model->getTree();

        $this->data['tree_map'] = $this->category_model->getTreeMap();

        $this->load->view('category/responsive-table', $this->data);

    }

    public function create()
    {
        $this->data['list'] = $this->category_model->getTree();

//        dump($this->data['list']);die;

        $this->load->view('category/create', $this->data);
    }

    public function detail()
    {
        $id = $this->input->get();

        $this->load->view('goods/form', $this->data);
    }
}
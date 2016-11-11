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

        $this->load->view('category/create', $this->data);
    }

    public function update()
    {
        $id = (int)$this->input->get('id');

        $this->data['list'] = $this->category_model->getTree();

        $result = $this->category_model->get_one($id);

        if (empty($result))
        {
            // 分类不存在 | id参数错误
        }
        else
        {
            $this->data['row'] = $result;
        }

        $this->load->view('category/update', $this->data);
    }
}
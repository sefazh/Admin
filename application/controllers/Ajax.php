<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/10
 * @Time: 15:50
 */
class Ajax extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新建分类 表单提交
     */
    public function category_create()
    {
        $this->load->model('category_model');

        $data = $this->input->post();

        $result = $this->category_model->create_row($data);
        ajax_return($result);
    }
}
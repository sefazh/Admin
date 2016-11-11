<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/11
 * @Time: 17:09
 */
class Brand extends BackBase
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('brand_model');
    }

    public function lst()
    {
        $this->data['list'] = $this->brand_model->get_all();

        $this->load->view('brand/responsive-table', $this->data);

    }

    public function create()
    {

        $this->load->view('brand/create', $this->data);

    }

    public function update()
    {
        $id = (int)$this->input->get('id');

        $result = $this->brand_model->get_one($id);

        if (empty($result))
        {
            // 分类不存在 | id参数错误
        }
        else
        {
            $this->data['row'] = $result;
        }

        $this->load->view('brand/update', $this->data);
    }
}
<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/15
 * @Time: 16:55
 */
class Type extends BackBase
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('type_model');
    }

    public function lst()
    {
        $this->data['list'] = $this->type_model->get_all();

        $this->load->view('type/responsive-table', $this->data);

    }

    public function create()
    {

        $this->load->view('type/create', $this->data);

    }

    public function update()
    {
        $id = (int)$this->input->get('id');

        $result = $this->type_model->get_one($id);

        if (empty($result))
        {
            // 分类不存在 | id参数错误
        }
        else
        {
            $this->data['row'] = $result;
        }

        $this->load->view('type/update', $this->data);
    }
}
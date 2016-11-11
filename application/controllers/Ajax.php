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
     * 新建&编辑分类 表单提交
     */
    public function category_edit()
    {
        $this->load->model('category_model');

        $data = $this->input->post();

        if (isset($data['id']) && $data['id'] > 0)
        {
            $result = $this->category_model->update_row($data);
        }
        else
        {
            $result = $this->category_model->create_row($data);
        }

        ajax_return($result);
    }

    public function remove()
    {
        $id = (int)$this->input->post('id');
        $method = $this->input->post('method');

        if ($id <= 0)
        {
            ajax_return(false);
        }
        else
        {
            switch ($method)
            {
                case 'category':
                    $this->category_del();
                    break;
                case 'brand':
                    $this->brand_del();
                    break;
                case 'goods':
                    // no break
                case 'privilege':
                default:
                    ajax_return(false);
            }
        }
    }

    /**
     * 删除分类
     */
    public function category_del()
    {
        $this->load->model('category_model');

        $id = (int)$this->input->post('id');

        if ($id <= 0)
        {
            $result = false;
        }
        else
        {
            $result = $this->category_model->delete_one($id);
        }

        ajax_return($result);
    }

    /**
     * 新建&编辑品牌 表单提交
     */
    public function brand_edit()
    {
        $this->load->model('brand_model');

        $data = $this->input->post();

        if (isset($data['id']) && $data['id'] > 0)
        {
            $result = $this->brand_model->update_row($data);
        }
        else
        {
            $result = $this->brand_model->create_row($data);
        }

        ajax_return($result);
    }

    /**
     * 删除品牌
     */
    public function brand_del()
    {
        $this->load->model('brand_model');

        $id = (int)$this->input->post('id');

        if ($id <= 0)
        {
            $result = false;
        }
        else
        {
            $result = $this->brand_model->delete_one($id);
        }

        ajax_return($result);
    }
}
<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/10/31
 * @Time: 17:11
 */
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get($this->table);

        return $query->result_array();
    }
}
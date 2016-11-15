<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/15
 * @Time: 16:56
 */
class Type_model extends MY_Model
{
    protected $table = 'type';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新建一条分类
     *
     * @param $data
     * @return bool
     */
    public function create_row($data)
    {
        $result = $this->db->insert($this->table, $data);

        return $result ? $this->db->insert_id() : false;
    }

    /**
     * 编辑一个分类
     *
     * @param $data
     * @return bool
     */
    public function update_row($data)
    {
        if ( ! isset($data['id']))
        {
            return false;
        }

        return $this->update_one($data);
    }

}
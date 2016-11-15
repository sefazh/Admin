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

    /**
     * 查询所有数据
     *
     * @return mixed
     */
    public function get_all()
    {
        $query = $this->db->order_by('`id` ASC')->get($this->table);

        return $query->result_array();
    }

    /**
     * 根据主键查询单条记录
     *
     * @param $id
     * @return mixed
     */
    public function get_one($id)
    {
        $where = array(
            'id' => $id
        );

        $query = $this->db->get_where($this->table, $where);

        return $query->row_array();
    }

    public function update_one($data, $pk='id')
    {
        if ( ! isset($data[$pk]))
        {
            return false;
        }

        $where = array(
            $pk => $data[$pk]
        );

        return $this->db->update($this->table, $data, $where);
    }

    public function delete_one($id)
    {
        $where = array(
            'id' => $id
        );

        return $this->db->delete($this->table, $where);
    }
}
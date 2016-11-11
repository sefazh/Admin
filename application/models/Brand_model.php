<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/11
 * @Time: 17:10
 */
class Brand_model extends MY_Model
{
    protected $table = 'brand';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 查询所有未被删除的记录
     *
     * @return mixed
     */
    public function get_all()
    {
        $where = array(
            'status >=' => 0
        );

        $query = $this->db->get_where($this->table, $where);

        return $query->result_array();
    }

    /**
     * 新建一条分类
     *
     * @param $data
     * @return bool
     */
    public function create_row($data)
    {
        $data['status'] = 0;

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

    /**
     * 逻辑删除一条记录
     *
     * @param $id
     * @return mixed
     */
    public function delete_one($id)
    {
        $data = array(
            'id' => $id,
            'status' => -1
        );

        return $this->update_one($data);
    }
}
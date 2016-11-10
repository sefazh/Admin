<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/3
 * @Time: 15:05
 */
class Category_model extends MY_Model
{
    protected $table = 'category';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 原版 无限分级递归排序
     *
     * @param int $pid
     * @param int $depth
     * @param int $max
     * @return array
     */
    public function getTree($pid = 0, $depth = 1, $max = 0)
    {
        static $result = array();
        $arr = $this->getSonNode($pid);

        foreach ($arr as $key => $val)
        {
            $val['depth'] = $depth;

            $result[] = $val;

            if ($max>0 && $depth>=$max)
            {
                continue;
            }

            $this->getTree($val['id'], $depth + 1, $max);
        }

        return $result;
    }

    /**
     * 获取父级为$id的所有权限
     *
     * @param $id
     * @return mixed
     */
    public function getSonNode($id)
    {
        $where = array(
            'pid' => $id
        );

        $query = $this->db->get_where($this->table, $where);

        return $query->result_array();
    }

    /**
     * 将所有分类的非末端节点以 id 为键返回数组
     *
     * @return array
     */
    public function getTreeMap()
    {
        $data = $this->get_all();
        $result = array();

        foreach ($data as $value)
        {
            if ( ! $this->_isLeaf($value['id']))
            {
                $result[$value['id']] = $value['cat_name'];
            }
        }
        $result[0] = 'root';

        return $result;
    }

    /**
     * 判断一个节点是否是末端节点
     *
     * @param $id
     * @return bool
     */
    private function _isLeaf($id)
    {
        $where = array(
            'pid' => $id
        );

        $this->db->where($where);
        $this->db->from($this->table);

        $count = $this->db->count_all_results();

        return $count == 0;
    }

    public function create_row($data)
    {
        $result = $this->db->insert($this->table, $data);

        return $result ? $this->db->insert_id() : false;
    }
}
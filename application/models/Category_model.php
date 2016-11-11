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

        $query = $this->db->order_by('sort ASC, cat_name ASC')->get_where($this->table, $where);

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

    /**
     * 判断id是否是pid的父级（pid是否存在于id的子级中）
     *
     * @param $id
     * @param $pid
     * @return bool
     */
    private function _isParent($id, $pid)
    {
        $children = $this->getTree($id);

        foreach ($children as $child)
        {
            if ($child['id'] == $pid)
            {
                return true;
            }
        }

        return false;
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
        if ( ! isset($data['id']) || ! isset($data['pid']))
        {
            return false;
        }

        if ($this->_isParent($data['id'], $data['pid']) || $data['id'] == $data['pid'])
        {
            return false; // pid不能子从于id
        }

        return $this->update_one($data);
    }
}
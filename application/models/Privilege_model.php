<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/11/1
 * @Time: 15:32
 */
class Privilege_model extends MY_Model
{
    protected $table = 'privilege';

    /**
     * 归获取全部权限列表
     *
     * @param int $pid
     * @param int $depth
     * @param int $max
     * @return array
     */
    public function getTree($pid = 0, $depth = 1, $max = 0)
    {
        $parent = array();

        $this->_getTree($parent, $pid, $depth, $max);

        return empty($parent)? $parent : $parent[$pid]['son'];
    }

    /**
     * 无限分级递归获取全部权限列表
     *
     * @param int $parent 结果返回的数组
     * @param int $pid 父级主键
     * @param int $depth 当前深度
     * @param int $max 最大深度
     * @return array
     */
    private function _getTree(&$parent, $pid = 0, $depth = 1, $max = 0)
    {
        $arr = $this->getSonNode($pid);

        foreach ($arr as $key => $val)
        {
            $val['depth'] = $depth;

            $parent[$pid]['son'][$val['id']] = $val;

            if ($max>0 && $depth>=$max)
            {
                continue;
            }

            $this->_getTree($parent[$pid]['son'], $val['id'], $depth + 1, $max);
        }
    }

    /**
     * 原版 无限分级递归排序
     *
     * @param int $pid
     * @param int $depth
     * @param int $max
     * @return array
     */
    public function oGetTree($pid = 0, $depth = 1, $max = 0)
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

            $this->oGetTree($val['id'], $depth + 1, $max);
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
     * @param $class
     * @param $function
     * @return mixed
     */
    public function getPrivilegeByClassAndFunction($class, $function)
    {
        $where = array(
            'class' => $class,
            'function' => $function
        );
        $query = $this->db->get_where($this->table, $where);
        return $query->row_array();
    }
}
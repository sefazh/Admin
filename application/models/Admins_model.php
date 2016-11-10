<?php

/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/10/31
 * @Time: 17:12
 */
class Admins_model extends MY_Model
{
    private $table = 'admins';
    public function __construct()
    {
        parent::__construct();
    }

    public function get_admin_by_account($account)
    {
        $where = array(
            'account' => $account
        );

        $query = $this->db->get_where($this->table, $where);

        return $query->row_array();
    }
}
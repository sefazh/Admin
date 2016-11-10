<?php
/**
 * AdminEx
 * @Author: zhuangxiaofan
 * @Date: 2016/10/31
 * @Time: 17:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !function_exists('dump'))
{

    function dump($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }

}

if ( !function_exists('get_microtime'))
{

    function get_microtime()
    {
        $time = explode(' ', microtime());
        return $time[1] + $time[0];
    }

}

if ( !function_exists('ajax_return'))
{
    function ajax_return($data)
    {
        header("content-type: application/json");
        echo json_encode($data);
        exit;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午3:04
 */

namespace Common;


class DBCore
{
    function __construct()
    {
        echo '数据库管理类核心';
    }
    function  insert()
    {
        echo '插入一条数据';
    }
    function select()
    {
        echo '查询数据';
    }
    function order()
    {
        echo '排序';
    }
    function del($id)
    {
        echo '删除一条记录'.$id;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 上午11:13
 */

namespace OBJECTPHP;


class Channel

{
    function __construct()
    {
        /*这里的权限 不要用get 敏感信息 我们用session 这里为了方便*/
        $access = $_GET['access'];

        if ($access=='admin')
        {
            $method=$_GET['a'];
            $this->$method();
        }else
        {


        }
    }


    function edit()
    {
        echo '编辑栏目'.'</br>';
    }

    function del()
    {
        echo '删除栏目'.'</br>';
    }
    function display()
    {
        echo '展示栏目'.'</br>';
    }

}


$channel = new Channel();
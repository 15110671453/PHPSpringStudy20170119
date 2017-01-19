<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午3:06
 */

namespace ActionModule;
function __autoload($classname){
    //自动载入函数
    //传入参数 类名 从后边 取六个字符
    echo '</br>'.$classname.'自动载入函数';
    if (substr($classname,-6)=='Action')
    {
        echo '</br>'.'自动载入函数2';
        $str= '../ActionModule/'.$classname.'.php';
        echo '</br>'.$str;
        require_once($str);

//        include './OEJECTPHP/'.$classname.'.php';
    }elseif ($classname=='DBCore')
    {
        require_once '../Common/'.$classname.'.php';

    }else
    {
        echo '</br>'.'自动载入函数3';

        $str ='../'.str_replace('\\','/',$classname).'.php';
        echo '</br>'.$str;
        require_once($str);
    }

}


use Common\ActionMy;
use Common\DBCore;

/*
 * get_object_vars($obj) 获取对象属性 以关联数据的形式返回
 * get_parent_class([$obj][class[string]]) 获取对象的父类 可以传入对象或者类名
 * is_subclass_of($obj,class[string]) 检测一个对象是否是一个对象的子类 第一个参数是对象引用
 * 第二个参数是字符串 父类的类名
 *
 * interface_exists 检测接口 是否已经定义
 * interface_exists('Channel');
 *
 * method_exists($obj,class[string]) 检测对象的某个方法名的方法是否实现存在
 *
 * 第一个参数 类名 或者 对象引用 第二个参数 为方法名
 *
 *
 *  property_exists($obj,class[string]) 判断一个属性是否存在一个对象中
 * 第一个参数 可以是类名或者对象引用 第二个参数为 成员属性名
 *
 * $obj instanceof ArcModuleAction 判断一个对象是不是指定的类名实例出来的
 *
 * is_a($obj,'ArcModuleAction') 也是判断一个对象是不是指定的类名实例出来的 但是不建议使用 已经被php废弃
 *
 * */

interface Channel{
    function  editChannel();
    function  delChannel();
}

class ArcModuleAction extends ActionMy implements Channel
{


    function __construct()
     {
         parent::__construct();
      echo '文章模块处理类';

    }
     function edit()
    {
        echo '编辑文章';
    }
    function del()
    {
        $db = new DBCore();
        $db->del('记录id');
        echo '删除文章';
    }

    public function config(){
        spl_autoload_register(array(__CLASS__,'auto'));
    }
    public function auto(){

        require_once('ArcModuleAction.php');
        echo '</br>'.'修改自动载入函数修改 __autoload';
    }

    function editChannel()
    {
        // TODO: Implement editChannel() method.
    }
    function delChannel()
    {
        // TODO: Implement delChannel() method.
    }


}





















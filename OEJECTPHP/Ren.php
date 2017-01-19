<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午2:38
 */

namespace OBJECTPHP;


class Ren
{
    public $shenGao;
    public $xingBie;
    public $xingMing;

    function  __construct($xingMingg)
    {
        $this->xingMing=$xingMingg;
    }


    function shuoHua()
    {
        echo '说话';
    }
    function  changGe()
    {
        echo '唱歌';
    }

    function xingMingEch()
    {
        echo $this->xingMing.'方法调用';
    }

}

$xiaoMing = new Ren('xiaoming');

$liMing =  new Ren('liMing');

$xiaoMing->shenGao='1.78';


$xiaoMing->shuoHua();

echo $xiaoMing->xingMing.$xiaoMing->shenGao;

//当我们生成对象实例 时 我们返回的是一个实例对象的引用
// 所以不能够通过将一个实例变量 再赋给另一个变量 就能'完全克隆一个实例'
// 所以后面还要学习实例对象的克隆的概念
// 对象创建 执行流程 第一步将对象实例(在内存中开辟一块空间 存储我们的对象) 实例后调用构造函数
// 然后将构造参数 赋值给初始化的配置工作 第三步把实例的引用地址返回 提供给程序员可操作



/*
 * 关键字 $this
 *
 * 栈区                                               堆区
 *
 * $xiaoming                                除了 $xingming $shengao 等属性
 *                                              还有$this
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * */










































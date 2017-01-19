<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 上午10:04
 */

namespace OBJECTPHP;


class Object6
{
    private $webname;

    private $weburl;

    function __construct($url,$name)
    {
        $this->weburl=$url;
        $this->webname=$name;
    }

    function getWebInfo()
    {

        echo '</br>'.'网站名称'.$this->webname.'网站地址'.'</br>'.$this->weburl.'</br>';
    }

}
/*
 *
 * $this 关键字  代表对象的引用
 *
 * */


$obj = new Object6('sina.com','新浪');

$obj->getWebInfo();


/*
 * 类继承 方法重写 思考
 * */

class A {

    private $name='wwww';
    function show()
    {
        echo $this->name;
    }
    function  d()
    {
        echo 111;

    }
}

class B extends A
{

    function d()
    {
        echo 2222;

    }
}

/*
 * 这里思考 重写父类方法时  方法中 有用$this的方法 和 没有用$this的方法
 *
 * 考虑重写 有用$this方法时 或不重写时 A类中的$this 此时代表谁
 * */


/*
 *
 * 关键字 parent 调用父类的方法
 *
 *
 *
 *
 *
 * */


class TPL
{
    private $tplpath;
    private $catch;
    private $cachetimes;

    function __construct()
    {
        $this->tplpath = '/templates/defaults';

        $this->catch = 'catch';

        $this->cachetimes = 1000;
    }


    function  display($tpfile='')
    {
        echo '载入模版文件:'.$tpfile.'</br>';
        echo '载入模版文件路径:'.$this->tplpath.'</br>';
        echo '载入模版文件缓存:'.$this->catch.'</br>';
        echo '载入模版文件缓存次数:'.$this->cachetimes.'</br>';
    }

    function resolve()
    {
        echo '解析标签'.'</br>';
    }

    function wrong()
    {
        echo '出错'.'</br>';
    }

}

class APP extends TPL
{

    function __construct()
    {
        parent::__construct();
        /*
         *
         * 子类对父类的方法进行扩充
         * 同时子类还想用父类的方法
         * 使用关键字patent
         *
         * $this 代表当前对象 self 代表当前类
         *
         * parent 代表父类
         *
         *
        */
    }
}

class Admin extends TPL
{

}
class Member extends TPL
{


}

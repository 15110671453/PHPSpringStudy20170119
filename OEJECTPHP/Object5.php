<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午5:25
 */

namespace OBJECTPHP;
/*
const 是类的常量
static 是类的全局变量 内存在整个脚本中只有一份 节省内存

静态方法  也可以称之为类方法
*/

class Object5
{
    private $mysqli;
    static $dbon=NULL;
    private  $shiLiPrivate;
    static  $leiBianLiang;
    function __construct()
    {
       $this->connect();
    }
    private function connect()
    {
        echo '实例化多份 方法执行多次'.'</br>';
        if (is_null(self::$dbon))
        {
            include "db_config.php";
            echo DBNAME.'</br>';

            self::$dbon=TRUE;

            echo '但是它只有一次'.'</br>';
        }
        echo '省内存空间 尤其是存储数据库公用的 数据库配置项 域名 用户名 密码 多个数据库连接 会节省多少内存嫩'.'</br>';

        $this->mysqli = new \mysqli(HOST,USER,PASWD,DBNAME);

    }

    static public function jingTai()
    {
        echo '</br>'."静态方法".'</br>';
        /*
         * 如果是静态方法 通过类名调用会效率很高
         * 但是这是需要确保没有类的属性在方法中不恰当调用
         *
         *
         *
         * */
        /*
         * 不能在类的方法中使用$this这样的对象 引用 和
         * 对象的成员变量的调用
         *
         *
         * 静态方法 没有对象参与
         *
         * 对一些类的配置方法 使用静态方法 会很合理
         *
         *
         *
         * */

        /*
         *
         * 栈区 实例对象的引用 存储
         *
         * 代码区 成员方法
         *
         * 堆区 存储成员属性
         *
         * 静态变量去
         *
         *
         *
         * */
            /*
             * 为了代码结构更清晰
             *
             * 不模糊
             *
             * 使用static 标志 该方法只为类服务
             *
             * 对象实例的 方法
             *
             * public 公有的 本类 子类 外部对象都可以调用
             * protected 受保护的 本类 子类 可以调用 外部对象不可以
             * private 私有的 本类 可以执行 子类 与 外部对象 都不可以调用
             *
             * */

        /*
         *
         *
         * 类继承 静态方法 可以重写吗
         *
         * 可以 重写
         *
         *
         * 但是注意  重写时 必须也是静态方法
         *
         *
         *
         *
         *
         *
         *
         * */

        /*
         * 类的
         * 构造方法 不能加static
         *
         * 因为构造方法是服务于类的
         *
         * 也不能加 private
         *
         * */

        /*
         * 在上面的讨论 构造方法 不能使用private
         *
         *  我们 利用这一点 来 想办法构造单列
         *
         * */


    }

}

$dbb = new Object5();

$dbb2 = new Object5();
$dbb3 = new Object5();



class DanLi
{
    private $name;

    static  $obj=null;

    const cc=100;
/*这样在外部不能实例 只能静态 中实例 搞成单列*/
    private function __construct($uname)
    {
        $this->name=$uname;
//        echo self::cc;
//        echo  self::$obj;
    }

    static function getObj()
    {

        if (is_null(self::$obj))
        {
            self::$obj=new DanLi();

        }
        return self::$obj;
    }
}










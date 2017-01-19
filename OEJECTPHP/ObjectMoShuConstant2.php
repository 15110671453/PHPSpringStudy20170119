<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午1:59
 */

namespace OBJECTPHP;


class ObjectMoShuConstant2
{
    public  $name;
    public $age;
    private $gongZi;

    function __construct($n,$a='',$money)
    {
        $this->name=$n;
        $this->age=$a;
        $this->gongZi=$money;
    }

    function __isset($var)
    {
        // TODO: Implement __isset() method.
            /*对类的私有属性变量 进行可控制的允许外部检测*/
        $arr = array('name','gongZi');
        if (in_array($var,$arr)){
            return isset($this->$var);
        }elseif(in_array($var,array_keys(get_object_vars($this))))
        {
            echo '属性不允许外部检查';
        }else
        {
            echo '属性不存在';
        }

    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
        /*对类的私有属性变量 进行可控制的删除*/
        unset($name);

    }

    function get_Money()
    {
        echo $this->name.'的工资：'.$this->gongZi;
    }
}

$liSI = new ObjectMoShuConstant2('李四',182,1900);

var_dump(isset($liSI->age));

/*私有 的 成员变量 如何检测有没有定义  需要 重写__isset 方法*/
var_dump(isset($liSI->gongZi));
//var_dump(isset($liSI->gongZi));
echo '</br>';

echo isset($_GET['page'])?$_GET['page']:0;


/*
 * 对于类的私有的属性变量  可以检测 也可以 删除
 *
 * unset isset
 *
 * 但是对于私有的需要重写__unset方法
 * */




$arr2 = array('新浪','jquery','smarty','sina.com');

/*
 * 数组的序列化
 * */
session_start();
$str = serialize($arr2);

echo '</br>'.$str.'</br>';

$arr3 = unserialize($str);

print_r($arr3);



/*
 * 想把这些信息 传递给其它页面 通过session
 *
 *
 * */

$_SESSION['array1']=$str;





class db{

    private $host;
    private $user;
    private $name;
    private $dbname;
    private $pwd;
    private $mysqli;

    function __construct($h,$u,$p,$d,$n='开发者')
    {
        $this->host=$h;
        $this->user=$u;
        $this->pwd=$p;
        $this->dbname=$d;
        $this->name=$n;
        $this->db();
    }

    function db()
    {
        $this->mysqli= new \mysqli($this->host,$this->user,$this->pwd,$this->dbname);
    }

    function  select()
    {
        $sql = "SELECT userid,username FROM user";


        $result = $this->mysqli->query($sql);

        $rows= array();

        while ($row =  $result->fetch_assoc())
        {
            $rows[]=$row;
        }
        echo '<pre>';

        print_r($rows);
    }

    function __wakeup()
    {
        // TODO: Implement __wakeup() method.

        /*
         * 序列化时 存储的是对象  主要存储的是对象的信息 就是所有成员属性字段
         * 并没有存储 方法 因此若需要反序列化 需要重写wakeup
         *
         * */

        $this->db();
    }
    function __sleep()
    {
        // TODO: Implement __sleep() method.

        /*
         * 通过该函数 来控制 序列化时 那些内容可以序列化
         * */

//        print_r(get_object_vars($this));
//
//        return array_keys(get_object_vars($this));

        return array('name');
    }
}

$channel = new db('localhost','root','asd1453NMDmysql','test');

$channel->select();
$obj = serialize($channel);


echo $obj;

$_SESSION['channel']=$obj;


echo 'sessionStart';

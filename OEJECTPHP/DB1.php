<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午3:46
 */

namespace OBJECTPHP;


/*
public 公有的 本类 子类 外部对象都可以调用
protected 受保护的 本类 子类 可以调用 外部对象不可以

private 私有的 本类 可以执行 子类 与 外部对象 都不可以调用

*/

class DB1
{
   private $mysqli;
    private  $options;
    private $tableName;

    function  __construct($name)
    {
        echo '</br>'.'构造函数';
        $this->tableName=$name;
        $this->db_connect();
    }

    private function db_connect()
    {
        //公司mac盒子
        $this->mysqli= new \mysqli('localhost','root','asd1453NMDmysql','test');
        //自己mac
        // $this->mysqli= new \mysqli('localhost','root','dyn123456','test');
        //insert into user (username,userid,shuohua,lover) values ('nihao','1200','mengxiang xianshi wo ai ni','mengxiang');
        echo '</br>'.'连接数据库';
    }

    function sortOrder($str)
    {
       $this->options['order']='ORDER BY'.$str;
        return $this;
    }

    function fields($fieldsArr)
    {
        if (empty($fieldsArr))
        {
            $this->options['fields']='';

        }
        if (is_array($fieldsArr))
        {
            $this->options['fields']=implode(',',$fieldsArr);

        }else
        {
            $this->options['fields']=$fieldsArr;
        }


          return $this;
    }

    function  select()
    {
        $sql = "SELECT {$this->options['fields']} FROM {$this->tableName}{$this->options['order']} ";

        echo '</br>'.$sql.'</br>';

       $result = $this->query($sql);
        return $result;
    }

    private function  query($sql)
    {
            $result = $this->mysqli->query($sql);

        $rows = array();

        while ($row = $result->fetch_assoc())
        {
            $rows[] =$row;
        }

        return $rows;


    }
    private function db_close()
    {
        $this->mysqli->close();


    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.

        $this->db_close();
    }
}


$db_List = new DB1('user');

$db_List->fields('username,userid');

$info = $db_List->select();
echo '<pre>';
print_r($info);
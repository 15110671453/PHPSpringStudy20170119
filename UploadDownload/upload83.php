<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/22
 * Time: 下午1:56
 */

function delEmpty($v)
{
    return $v!='';

}

$uploads = array_filter($_FILES['file']['name'],'delEmpty');

print_r($_FILES['file']);
$dirName = '../Uploads/2017';
if (!is_dir($dirName))
{
    mkdir($dirName);
}

$mysqli = new mysqli('localhost','root','asd1453NMDmysql','test');

var_dump($mysqli);
foreach ($uploads as $k=>$v)
{
    $tofile = $dirName.'/'.$k.$v;
    if (is_uploaded_file($_FILES['file']['tmp_name'][$k]))

    {

        $size = $_FILES['file']['size'][$k];
        $name = $_FILES['file']['name'][$k];
        move_uploaded_file($_FILES['file']['tmp_name'][$k],$tofile);

        $sql = "INSERT INTO file (fileName,fileSize,filePath,userid) values ('{$name}','{$size}','{$tofile}','20171224')";
        var_dump($sql);
        $mysqli->query($sql);
    }



}































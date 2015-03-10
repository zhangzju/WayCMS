<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/7
 * Time: 4:35
 */

require_once('config.php');

if(!($con=mysql_connect(HOST,USERNAME,PASSWORD))){
    echo mysql_error();
}
if(!(mysql_select_db(DBNAME))){
    echo mysql_error();
//}else {
//    echo "<h1>connect success</h1>";
}
mysql_query('set names utf8');//数据库连接成功，字符集可以浏览器设定，可以不改
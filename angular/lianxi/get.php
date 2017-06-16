<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 22:38
 */

$money = $_GET['money'];
if($money>100){
    echo "要到数据了";
}
else{
    echo "没有数据";
}
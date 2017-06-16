<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 14:39
 */
$money = $_GET['money'];
if ($money > 100){
    echo "服务器给数据了";
}else{
    echo  "没给钱，或钱给的不够";
}
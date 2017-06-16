<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 22:48
 */

$money = $_POST['money'];
if($money>100){
    echo "给数据了";
}
else{
    echo "没有数据";
}
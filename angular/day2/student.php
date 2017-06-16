<?php
/**
 * Created by PhpStorm.
 * User: gaowei
 * Date: 2017/3/4
 * Time: 23:28
 */
header("Content-Type: text/html;charset=utf-8");
$res = file_get_contents('./student.json');
echo  $res;
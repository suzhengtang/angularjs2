<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 10:52
 */

header("Content-Type: text/html;charset=utf-8");
echo file_get_contents('https://api.douban.com/v2/book/1220562');
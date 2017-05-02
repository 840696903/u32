<?php
    /*
     *                          第二章 
     * 一：函数
     * 二：数组
     *       
     *       
     *       require与include的区别(**************)
     *          include导入的自定义每次都要读取和评估，而require只需要处理一次
     *          （即用户自定义库的内容覆盖require语句位置）。故此，如果一份PHP文件
     *          需要多次执行，且导入的都是相同库文件，应使用require；如果PHP文件每次
     *          执行导入的是不同文件，应使用include
     *      调用：require "路径"          执行多次，导入多次，建议使用
     *          require_once "路径"     执行多次，导入一次，建议使用
     *          include "路径"
     *          include_once "路径"
     * 
     * 
     * print_r($arr1); 打印数组的值
     * Array ( [0] => 3 [4] => 2 [age] => 32 ) 
     * 
     * var_dump($arr1);打印数组的值以及数据类型
     * array(9) { [0]=> int(3)["sex"]=> string(3) "男" } 
     * 
     * 
     * 数组索引：
     *      索引数组--可以用for循环将数组值全部遍历
     *      关联数组--无法用for循环来讲数组全部遍历，只能通过:
     *          foreach (数组名 as $key => $value){
     *              
     *          }
     * 
     * 
     */

    $arr1 = array("彭浩", 22,"女");
    foreach ($arr1 as $value){
        echo "{$value}<br />";
    }
    
    $arr2 = array("name" => "彭浩","age" => 22,"sex" => "非男");
    foreach ($arr2 as $key => $value){
        echo "{$key}=>{$value}<br />";
        echo "{$value}<br />";
        echo "{$key}<br />";
        echo "<br/>";
    }








    $arr1 = [3,2,5,4];
    $arr1[3] = 5;
    $arr1["age"] = 32;
    $arr1["sex"] = "男";
    $arr1[] = 25;
    $arr1[7] = 55;
    $arr1[] = 65;
    print_r($arr1);
    echo "<br/>";
    var_dump($arr1);
?>
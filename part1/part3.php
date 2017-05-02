<?php

//     $array1 = array("name"=>"fds","age"=>12,"sex"=>null);
//     $ab = array_key_exists("sex", $array1);//如果查出键的值为null返回true
//     $ac = isset($array1["sex"]);     //如果查出键的值为null也会返回false
//     var_dump($ab);
//     var_dump($ac);

//     $array2 = array(5,45,8,412,56,65,52);
//     $ad = array_slice($array2,1,1); //数组截取---提取数组某个索引到指定长度的元素
//     var_dump($ad);    
    

//     $array1 = array("name"=>"fds","age"=>12,"sex"=>null);
//     $ag = array_slice($array1,0,2);//数组截取---提取数组某个索引偏移量到指定长度的元素
//     var_dump($ag);    
//     $i = 5;
    
//     $array3 = range(2, 199,$i+1);
//     var_dump($array3);
    echo "<br/>";
    /*
     * 利用数组，编写程序模拟扑克牌
     *  1、定义一个索引数组，存储扑克牌花色
     *      $huase = array("红桃","方块","黑桃","梅花");
     *  2、定义一个索引数组，存储扑克牌的数字
     *      $paivalue = array("K","Q","J",10,9,8,7,6,5,4,3,2,"A");
     *  3、通过程序创建54张牌，并放入$pukepai
     *      array_push($pukepai,);
     *  4、将数组中的元素值随机打乱
     *      shuffle($pukepai);
     *  5、模拟发牌 产生随机数
     *      $k = rand();
     */     
    
    
    $huase = array("红桃","方块","黑桃","梅花");
    
    $paivalue = array("K","Q","J",10,9,8,7,6,5,4,3,2,"A");
    
    $pukepai = array("大王","小王");
    
    foreach ($huase as $key => $value){
        $i = $value;
        foreach ($paivalue as $key => $value){
            $j = $value;
            array_push($pukepai,$i.$j);
        }
    }
    
    shuffle($pukepai);
    echo "<br/>洗牌后的牌：";
    foreach ($pukepai as $key => $value){
        echo "$value,";
    }
    $user1 = array();
    $user2 = array();
    $user3 = array();
    $end = array();
    $end = array_slice($pukepai,51,3);
    unset($pukepai[51],$pukepai[52],$pukepai[53]);
    foreach ($pukepai as $key => $value){
        switch ($key%3) {
            case 0:array_push($user1,$value);
                    break;
            case 1:array_push($user2,$value);
                    break;
            case 2:array_push($user3,$value);
                    break;
        }
    }
    
    echo "<br/>底牌：";
    foreach ($end as $key => $value){
        echo "$value,";
    }
    echo "<br/>第一个人：";
    foreach ($user1 as $key => $value){
        echo "$value,";
    }
    echo "<br/>第二个人：";
    foreach ($user2 as $key => $value){
        echo "$value,";
    }
    echo "<br/>第三个人：";
    foreach ($user3 as $key => $value){
        echo "$value,";
    }
?>
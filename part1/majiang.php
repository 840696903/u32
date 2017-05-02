<?php
    


    $huase = array("万","筒","条");
    $shu = array(1,2,3,4,5,6,7,8,9);
    $pai = array();
    $user = array();
    for ($j=0;$j<count($huase);$j++){
        for ($i=0;$i<count($shu);$i++){
            array_push($pai,$shu[$i].$huase[$j]);
            array_push($pai,$shu[$i].$huase[$j]);
            array_push($pai,$shu[$i].$huase[$j]);
            array_push($pai,$shu[$i].$huase[$j]);
        }
    }
    
    shuffle($pai);
    /**
     * 发手牌
     * @param unknown $array//牌堆
     * @param string $fist  //如果是庄家（第一个玩家），填写true，否则不填
     */

    function fapai(&$array,$fist=false){
        $user = array();                    //玩家手牌
        if ($fist){                         //判断是否是庄家 庄家14张牌
            $num = 14;
        }else {                             //判断是否是庄家 非庄家13张牌
            $num = 13;
        }
        for ($j=0;$j<$num;$j++){
            $empy = rand(0,count($array)-1);
            array_push($user, $array[$empy]);
            unset($array[$empy]);
            $array = array_values($array);
        }
        return $user;
    }
    
    function mopai(&$array){
        $user = array();                    //玩家手牌
            $empy = rand(0,count($array)-1);
            array_push($user, $array[$empy]);
            unset($array[$empy]);
            $array = array_values($array);
        return $user;
    }
    
    
    $user1=fapai($pai,true);
    $user2=fapai($pai);
    $user3=fapai($pai);
    $user4=fapai($pai);
    echo "<br/>user1:";
    foreach ($user1 as $value){
        echo $value.",";
    }
    echo "<br/>user2:";
    foreach ($user2 as $value){
        echo $value.",";
    }
    echo "<br/>user3:";
    foreach ($user3 as $value){
        echo $value.",";
    }
    echo "<br/>user4:";
    foreach ($user4 as $value){
        echo $value.",";
    }
    echo "<br/>剩余牌堆:";
    foreach ($pai as $value){
        echo $value.",";
    }
    $user5=mopai($pai);
    echo "<br/>摸牌:";
    foreach ($user5 as $value){
        echo $value.",";
    }
    
    

?>
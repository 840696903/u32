<?php


    /*方法二：
     *引入文件
     *后面程序使用function ($className)函数是自动引入文件
     */
    require_once 'index.php';

    /*方法二：
     *引入文件  
     *后面程序使用function ($className)函数是自动引入文件
     */
//     spl_autoload_register(function ($className){
//         require_once $className.".class.php";
//     });
    
    
    /*方法一：
     *引入文件 
     */
//     require_once 'Goods.class.php';
//     require_once 'People.class.php';
//     require_once 'Bag.class.php';
//     require_once 'Monster.class.php';
    
    /*
     * 创建商品
     */
    $egoods1 = new Equipment("无尽之刃", 200, 1,100,15);
    $egoods2 = new Equipment("幻影之舞", 300, 1,150,20);
    $egoods3 = new Equipment("复活甲", 500, 1,0,80);
    
    $mgoods1 = new Medicine("低级药水", 5, 1,50,5,2);
    $mgoods2 = new Medicine("蓝药水", 10, 1,0,40,5);
    $mgoods3 = new Medicine("红药水", 10, 1,150,0,10);
    
    $fgoods1 = new Food("饼干", 5, 1, 5);
    $fgoods2 = new Food("包子", 5, 1, 10);
    $fgoods3 = new Food("杜康酒", 250, 1, 250);
    


    
//     $goods1 = new Goods("低级药水", 5, 100);
//     $goods2 = new Goods("蓝药水", 10, 100);
//     $goods3 = new Goods("红药水", 10, 100);
//     $goods4 = new Goods("无尽之刃", 200, 15);
//     $goods5 = new Goods("幻影之舞", 300, 10);
//     $goods6 = new Goods("复活甲", 500, 5);
//     echo $goods5;
//     /*
//      * 创建怪物
//      */
//     $mgod1 = array($mgoods1,$mgoods3,$mgoods4,$mgoods5);
//     $mgod2 = array($mgoods1,$mgoods2,$mgoods5);
//     $mgod3 = array($mgoods1,$mgoods4,$mgoods5,$mgoods6);
    
//     $monster1 = new Monster("史莱姆", 15, 50, 1, $mgod1);
//     $monster2 = new Monster("哥布林弓箭手", 125, 100, 3, $mgod3);
//     $monster3 = new Monster("冰霜巨龙", 300, 500, 6, $mgod3);
    
    
//     /*
//      * 创建玩家
//      */
        $people1 = new People("战法", 1900,new Bag(),0,1,200,50,50);
        $people2 = new People("包子入侵", 1500,new Bag(),250,3,150,25,35);
        $people1->showMyself();
        $people1->useFood($fgoods1);
        $people1->useFood($fgoods2);
        $people1->useFood($fgoods3);
        $people1->showMyself();
        $people1->useFood($egoods2);
        $people1->useFood($egoods3);
        $people1->useFood($egoods2);
        $people1->showMyself();
        $people1->useFood($mgoods1);
        $people1->showMyself();
   
//     /*
//      * 购买商品
//      */
//     $people1->buyGoods($goods6,1);
//     $people1->buyGoods($goods1,1);
//     $people1->buyGoods($goods2,1);
//     $people1->showMyself();
//     $people1->buyGoods($goods2,5);
//     $people1->getBag()->lookBag();
//     $people1->showMyself();
//     $people1->buyGoods($goods3,2);
//     $people1->getBag()->lookBag();
//     $people1->showMyself();
//     $people1->buyGoods($goods6,2);
//     $people1->getBag()->lookBag();
//     $people1->showMyself();
    /*
     * 出售商品
     */
//     $people1->salGoods($goods1,1);
//     $people1->getBag()->lookBag();
//     $people1->salGoods($goods2,5);
//     $people1->getBag()->lookBag();
//     $people1->salGoods($goods3,2);
//     $people1->getBag()->lookBag();
//     $people1->salGoods($goods6,2);
//     $people1->getBag()->lookBag();
//     $people1->showMyself();
    
//     /*
//      * 杀怪物
//      */
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
//     $people1->killMonster($monster2);
?>
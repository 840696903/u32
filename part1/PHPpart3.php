<?php
/*
 *                                      第三章 面向对象
 * 一:
 *   1）面向过程：侧重在功能实现的角度思考问题
 *          分析出解决问题所需要的步骤，然后用方法把这些步骤一步一步实现，使用的时候一个一个依次调用就可以了。
 *   2）面向对象：侧重在功能的整体构成角度思考问题
 *          把构成问题事物分解成各个对象，建立对象的目的不是为了完成一个步骤，而是为了描叙某个事物在整个解决问题的步骤中的行为。
 *      
 *   3）面向对象比面向过程的好处：
 *          对功能进行统一，从而保证了程序的可维护性增强，程序的可维护性增加保证了程序的可扩展性增强。    
 *          
 *   3）类和对象的概念   
 *      类是对象的抽象，对象是类的实例    
 *          
 *      
 *      
 *      练习：
 *      1）请用面向对象的方式模拟一个人看电视，完成开机、调大音量、调小音量、切换频道、关机等动作
 *      2）请用面向对象的方式模拟一个用户购买一件商品，金币减少、背包物品增加等动作
 */

    require 'Person.class.php';
    $p = new Person();
    $p->name = "彭浩";
    $p->age = 22;
    $p->say();
    
    $g1 = new Goods();
    $g1->name = "加多宝";
    $g1->price = 4.5;
    $g1->salprice = 5;
    $g1->show();
?>
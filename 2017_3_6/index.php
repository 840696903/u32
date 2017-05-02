<?php
    /*
     *引入文件
     *后面程序使用function ($className)函数是自动引入文件
     */
    spl_autoload_register(function ($className){
        require_once $className.".class.php";
    });
    
    
    /*
     * 魔术方法：
     *  注意：魔术方法不能手动调用，只能通过特殊的语句让该对象自动调用魔术方法。
     *  1）__set($propertyName,$propertyValue)
     *  2）__get($propertyName)
     *  当执行$对象变量->属性名称 = 值 时，会自动调用__set;
     *  当执行$对象变量->属性名称 时，会自动调用__get;
     *  /3)__isset
     *  /4)__unset
     *  5)__toString() ****
     *      当使用echo语句直接输出一个对象时，将对象转化为字符串进行输出
     *  /6)__call($functionName,$args)
     *       当调用一个对象的不存在的函数时，给出一些提示信息
     *  7)__autoload($className)5.1之前版本
     *      当PHP文件中要使用一个类时，自动加载该类文件。
     *    spl_autoload_register(function ($className){}
     */
?>
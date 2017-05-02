<?php
    /*
     *引入文件
     */
    require 'TV_class.php';
    require 'User_class.php';
    
    
    /*
     *创建一个电视对象
     */
    $TV1 = new TV_class;
    $TV1->volume = 20;
    $TV1->channel = 143;
    $TV1->open = 0;
    /*
     * 创建一个用户对象
     */
    $user1 = new User_class();
    $user1 = new User_class();
    $user1->name = "彭浩";
    
    $user2 = new User_class();
    $user2->name = "彭浩f";
    
    $user1->showMyself();
    $user2->showMyself();
    /*
     * 用户对电视机操作
     */
    echo "<br/>判断电视是否打开，打开为1，关闭为0---".$TV1->open;//判断电视是否打开，打开为1，关闭为0
    $user1->open_TV($TV1);//打开电视
    $user1->add_volume($TV1);//音量加1
    echo "<br/>打开电视,音量加1---".$TV1->volume;//
    $user1->subtract_volume($TV1);//音量减1
    echo "<br/>音量减1---".$TV1->volume;//
    $user1->add_channel($TV1);//频道加1
    echo "<br/>频道加1---".$TV1->channel;//
    $user1->change_channel($TV1,54);//切换到频道54
    echo "<br/>切换到频道54---".$TV1->channel;//
    $user1->subtract_channel($TV1);//频道减1
    echo "<br/>频道减1---".$TV1->channel;//

?>
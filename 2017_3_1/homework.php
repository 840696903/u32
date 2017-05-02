<?php
    /*
     * 1、写函数创建长度为10的数组。数组中的元素为递增的奇数。首项为1。
     * 2、创建长度为10的数组，数组中的元素为递增的等比数，比值为3。首项为1
     * 3、求数组中最大数；
     * 4、创建一个长度为20的数组，数组中的元素满足斐波那契数列的规律；
     *  斐波那契数列: 第1项是0，第2项是1。这个数列从第3项开始，每一项都等于前两项之和。
     * 5、计算数组中最大数和最小数的差；
     * 6、写一个方法，将一个长度超过10的数组最后5项直接截取，不改变顺序直接变为前5项，
     *  如{1,2,3,4,5,6,7,8,9,10,11,12}在经过方法后变为：
     *  {8,9,10,11,12,1,2,3,4,5,6,7}
     * 7、将两个数组连接成一个新数组；
     * 8、数组逆序（不能直接使用rsort函数，不能生成新数组）；
     * 9、在长度为10的升序有序数组中插入一个数字，组成新数组，保证数组顺序（不能直接使用sort）
     * 10、将一个无序数组排列成升序数组；（冒泡排序）
     * 11、对有序数组进行洗牌操作；（不能直接使用shuffle函数）
     * 12、删除数组中指定位置的元素；(参考unset函数)
     * 13、将数组中素数删除组成新数组
     *  素数：又叫质数，除了1和它本身以外不再有其他的除数整除。
     * 14、写函数检查数组中是否存在某个元素（不能直接使用in_array）
     * 15、写函数，向数组最后追加一个元素（不能直接使用array_push）
     * 16、写函数，求数组中所有元素之和（不能直接使用array_sum）

     * */



    /**
     * 1、写函数创建长度为10的数组。数组中的元素为递增的奇数。首项为1。 
     * @param unknown $fi       //首项为1
     * @param unknown $length  //数组长度为10
     * @return unknown[]|number[]
     */
    echo "第一题：";
    function setarry($fi,$length){
        $arry1 = array($fi);
        for ($i = 0 ;$i < $length - 1; $i++){
            $arry1[$i+1] = 2 + $arry1[$i];
        }
        return $arry1;
    }
    $arry1 = setarry(1,10);
    foreach ($arry1 as $value){
        echo "$value,";
    }
    
    /*
     *2、创建长度为10的数组，数组中的元素为递增的等比数，比值为3。首项为1
     */
    echo "<br/>第二题：";
    $arry2 = array(1);//首项为1
    $length2 = 10;//长度为10
    $asd = 3;   //比值为3
    for ($i = 0 ;$i < $length2 - 1; $i++){
        $arry2[$i+1] = $asd * $arry2[$i];
    }
    foreach ($arry2 as $value){
        echo "$value,";
    }

    
    /*
     *3、求数组中最大数；
     */
    echo "<br/>第三题：";
    $arry3 = array(-25,-653,-81,-23,-45,-165,-12);
    $max = $arry3[0];
    foreach ($arry3 as $value){
        if ($max < $value){
            $max = $value;
        }
    }
    echo $max;
    
    /*
     *4、创建一个长度为20的数组，数组中的元素满足斐波那契数列的规律；
     *  斐波那契数列: 第1项是0，第2项是1。这个数列从第3项开始，每一项都等于前两项之和。 
     */
    echo "<br/>第四题：";
    $arry4 = array(0,1);//首项为1
    $length4 = 20;      //长度为10
    for ($i = 0 ;$i < $length4 - 2; $i++){
        $arry4[$i+2] = $arry4[$i+1] + $arry4[$i];
    }
    foreach ($arry4 as $value){
        echo "$value,";
    }
    
    /*
     *5、计算数组中最大数和最小数的差；
     */
    echo "<br/>第五题：";
    $arry5 = array(-25,-53,81,-23,45,165,12);
    $max = $arry5[0];//数组中最大数
    $min = $arry5[0];//数组中最小数
    $difference=0;  //数组中最大数和最小数的差
    foreach ($arry5 as $value){
        if ($max < $value){
            $max = $value;
        }
        if ($min > $value){
            $min = $value;
        }
    }
    $difference = $max - $min;
    echo "最大数和最小数的差为{$difference}";
    
    /*
     *  6、写一个方法，将一个长度超过10的数组最后5项直接截取，不改变顺序直接变为前5项，
     *  如{1,2,3,4,5,6,7,8,9,10,11,12}在经过方法后变为：
     *  {8,9,10,11,12,1,2,3,4,5,6,7}
     */
    echo "<br/>第六题：";
    $arry6 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    $arry6_1=array();
    if (count($arry6)>10){
        end($arry6);
        for ($i = 0;$i < 5;$i++){
            prev($arry6);
        }
        for ($i = 0;$i < 5;$i++){
            $arry6_1[$i] = next($arry6);
        }
        $k = key($arry6);
        reset($arry6);
        for ($i = 5;$i < $k +1 ;$i++){
            $arry6_1[$i] = current($arry6);
            next($arry6);
        }
    }
    foreach ($arry6_1 as $value){
        echo "$value,";
    }
    
    /*
     * 
     * 7、将两个数组连接成一个新数组；
     */
    echo "<br/>第七题：";
    $arry7_1 = array(1,2,3,4,5,6,7);
    $arry7_2 = array(8,9,10,11,12,13,14,15);
    $arry7_new = array();
    for ($i = 0;$i < (count($arry7_1)+count($arry7_2));$i++){
        if ($i < count($arry7_1)){
            $arry7_new[$i] = $arry7_1[$i];
        }else{
            $arry7_new[$i] = $arry7_2[$i - count($arry7_1)];
        }
    }
    foreach ($arry7_new as $value){
        echo "$value,";
    }
    
    /*
     * 8、数组逆序（不能直接使用rsort函数，不能生成新数组）；
     */
    echo "<br/>第八题：原数组：";
    $arry8 = array(1,2,3,4,5,6,7,8,9);
    foreach ($arry8 as $value){
        echo "$value,";
    }
    $mod = 0;           //保存中间值
    $index8 = count($arry8);
    $ke = 0;            //判断奇偶数，0为偶数，1为奇数
    if ($index8%2){   //数组长度奇数
        $ke = 1;
    }else {                 //数组长度偶数
        $ke = 0;
    }
    for ($i=0;$i<($index8-$ke)/2;$i++){
        $mod = $arry8[$i];
        $arry8[$i] = $arry8[$index8-$i-1];
        $arry8[$index8-$i-1] = $mod;
    }
    echo "<br/>第八题：现数组：";
    foreach ($arry8 as $value){
        echo "$value,";
    }
    /*
     * 9、在长度为10的升序有序数组中插入一个数字，组成新数组，
     * 保证数组顺序（不能直接使用sort）
     */
    echo "<br/>第九题：原数组";
    $arry9 = array(1,3,5,7,9,14,18,23);
    foreach ($arry9 as $key => $value){
        echo $value.",";
    }
    $s = 10;
    $mod9 = 0;
    $i=0;
    foreach ($arry9 as $key => $value){
        if ($value<$s){
            $arry9[$i]=$value;
        }else{
            if ($s > $arry9[$i-2]){
                $arry9[$i]=$s;
                $arry9[$i+1]=$value;
                $i++;
            }else{
                $arry9[$i]=$value;
            }
        }
        
        $i++;
    }
    echo "<br/>第九题：现数组";
    foreach ($arry9 as $key => $value){
        echo $value.",";
    }
    /*
     * 10、将一个无序数组排列成升序数组；（冒泡排序） 
     */
    echo "<br/>第十题：原数组：";
    
    $arry10 = array(18,12,65,4,135,78,20,46,18,9);

    foreach ($arry10 as $key => $value){
        echo "$value,";
    }
    $mod10 = 0;
    for ($k = 0;$k < count($arry10)-1;$k++){
        for ($i = 0;$i < count($arry10)-1;$i++){
            if ($arry10[$i] > $arry10[$i+1]){
                $mod10 = $arry10[$i+1];
                $arry10[$i+1] = $arry10[$i];
                $arry10[$i] = $mod10;
            }    
        }
    }
    echo "<br/>第十题：现数组：";
    foreach ($arry10 as $key => $value){
        echo "$value,";
    }
    
    
    /*
     * 11、对有序数组进行洗牌操作；（不能直接使用shuffle函数） 
     */
    echo "<br/>第十一题：原数组：";
    $arry11 = array(1,12,20,24,35,46,58,65,78,89);
    foreach ($arry11 as $key => $value){
        echo "$value,";
    }
    $arry11_1 = array();    //保存0到9的随机数的数组 
    $arry11_2 = array();    //保存随机数的中间数组
    $j = 0;
    for ($i = 0;$i<100;$i++){
        $tmp = rand(0,9);
        $arry11_1[]=$tmp;
    }
    $arry11_1=array_unique($arry11_1);
    foreach ($arry11_1 as $key => $value){
        $arry11_2[$j] = $arry11[$value];
        $j++;
    }
    $arry11=$arry11_2;
    echo "<br/>第十一题：现数组：";
    foreach ($arry11 as $key => $value){
        echo "$value,";
    }
    
    
    /**
     * 12、删除数组中指定位置的元素；(参考unset函数)
     * @param unknown $arry
     * @param unknown $i    //指定位置5
     * @return unknown[]
     */
    echo "<br/>第十二题：原数组：";
    function deleta(&$arry,$i){
        $arrynew = array();
        $j = 0;
        foreach ($arry as $key => $value){
            if ($key == $i){
                $j--;
                $arrynew[$j] = $value;
            }else{
                $arrynew[$j] = $value;
            }
            $j++;
        }
        return $arrynew;
    }
    
    $arry12 = array(-25,-653,-81,-23,-45,-165,-12,"dhe");
    foreach ($arry12 as $key => $value){
        echo "$value,";
    }
    $arry12=deleta($arry12,5);
    echo "<br/>第十二题：现数组：";
    foreach ($arry12 as $key => $value){
        echo "$value,";
    }
    
    /**
     * 13、将数组中素数删除组成新数组
     * 素数：又叫质数，除了1和它本身以外不再有其他的除数整除。
     * @param unknown $arry
     * @return unknown[]
     */
    echo "<br/>第十三题：原数组：";
    function deleup(&$arry){
        $arrynew = array();
        foreach ($arry as $key => $value){
            for($i=2;$i<$value;$i++){
                if ($value%$i==0){
                    $arrynew[]=$value;
                    break;
                }
            }
        }
       return $arrynew;
    }
    
    $arry13 = array(1,3,5,4,6,8,9,11,85,26,59);
    foreach ($arry13 as $key => $value){
        echo "$value,";
    }
    $arry13=deleup($arry13);
    echo "<br/>第十三题：现数组：";
    foreach ($arry13 as $key => $value){
        echo "$value,";
    }
    
    /**
     * 14、写函数检查数组中是否存在某个元素（不能直接使用in_array） 
     * @param unknown $arry
     * @param unknown $se  //是否存在"34"
     */
    echo "<br/>第十四题：";
    function ina($arry,$se){
        foreach ($arry as $key => $value){
            if ($value==$se){
                echo "此数组中存在$se";
                return 1;
            }
        }
        echo "此数组中不存在$se";
        return 0;
    }
    $arry14 = array(5,4,6,1,5);
    ina($arry14,"34");
    
    
    /**
     * 15、写函数，向数组最后追加一个元素（不能直接使用array_push）
     * @param unknown $arry
     * @param unknown $sd       //追加元素"45"
     */ 
    echo "<br/>第十五题：原数组";
    function push(&$arry,$sd){
        $end = count($arry);
        $arry[$end] = $sd;
    }
    $arry15 = array(5,4,6,1,5);
    foreach ($arry15 as $key => $value){
        echo "$value,";
    }
    push($arry15,45); 
    echo "<br/>第十五题：现数组";
    foreach ($arry15 as $key => $value){
        echo "$value,";
    }

    /**
     * 16、写函数，求数组中所有元素之和（不能直接使用array_sum） 
     * @param unknown $arry
     * @return number|unknown   //返回和
     */
    echo "<br/>第十六题：原数组";
    function sum($arry){
        $sum = 0;
        foreach ($arry as $value){
            $sum += $value;
        }
        return  $sum;
    }
    $arry16 = array(5,4,6,8,2,1,5);
    foreach ($arry16 as $key => $value){
        echo "$value,";
    }
    echo "<br/>第十六题：和：";
    $sum = sum($arry16);
    echo "$sum";
    
?>
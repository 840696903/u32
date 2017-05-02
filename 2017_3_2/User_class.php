<?php
/**
 * 
 * @author Administrator
 *
 */
class User_class
{
    public  $name;
    public static $className;
    
    function say(){
        echo "Y(^o^)Y";
    }
    
    function showMyself() {
        echo $this->name."是".$this::$className."班的<br/>";
    }
    /**
     *
     * @return boolean  //返回1表示开机状态，0表示关机状态
     */
    function open_TV($TV){
        if ($TV->open){
            return $TV->open=0;
        }else {
            return $TV->open=1;
        }
    }
    /**
     *
     * 音量加1；音量0到30之间
     */
    function add_volume($TV){
        if ($TV->open){
            if ($TV->volume!=30){
                return $TV->volume++;
            }
        }
    }
    
    /**
     * 音量减1；音量0到30之间
     */
    function subtract_volume($TV){
        if ($TV->open){
            if ($TV->volume!=0){
                return $TV->volume--;
            }
        }
    }
    /**
     * 频道加1；在0到300之间
     */
    function add_channel($TV){
        if ($TV->open){
            if ($TV->channel!=30){
                return $TV->channel++;
            }
        }
    }
    /**
     * 频道减1；在0到300之间
     */
    function subtract_channel($TV){
        if ($TV->open){
            if ($TV->channel!=0){
                return $TV->channel--;
            }
        }
    }
    /**
     * 切换频道
     * @param unknown $num  //切换的频道 在0到300之间
     * @return unknown      //返回频道值
     */
    function change_channel($TV,$num){
        if ($TV->open){
            if ($num >= 0 and $num <= 300){
                return $TV->channel=$num;
            }
        }
    }
}

?>

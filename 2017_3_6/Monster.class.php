<?php
/**
 * 怪物类
 * @author Administrator
 *
 */
class   Monster
{
    private $name;//怪物名
    private $money;//怪物所掉金币
    private $EXP;//怪物所掉经验
    private $level;//怪物等级
    private $tools = array();//怪物所能掉的物品
    
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $money
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @return the $EXP
     */
    public function getEXP()
    {
        return $this->EXP;
    }

    /**
     * @return the $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return the $tools
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @param int $EXP
     */
    public function setEXP($EXP)
    {
        $this->EXP = $EXP;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @param Ambigous <multitype:, array> $tools
     */
    public function setTools($tools)
    {
        $this->tools = $tools;
    }

//     /**
//      * 获取名字
//      */
//     public function getName(){
//         return $this->name;
//     }
//     /**
//      * 设置名字
//      * @param string $name
//      */
//     public function setName($name){
//         $this->name = $name;
//     }

//     /**
//      * 获取金币
//      */
//     public function getMoney(){
//         return $this->money;
//     }
//     /**
//      * 设置金币
//      * @param int $money
//      */
//     public function setMoney($money){
//         $this->money = $money;
//     }

//     /**
//      * 获取经验
//      */
//     public function getEXP(){
//         return $this->EXP;
//     }
//     /**
//      * 设置经验
//      * @param int $EXP
//      */
//     public function setEXP($EXP){
//         $this->EXP = $EXP;
//     }

//     /**
//      * 获取等级
//      */
//     public function getLevel(){
//         return $this->level;
//     }
//     /**
//      * 设置等级
//      * @param int $level
//      */
//     public function setLevel($level){
//         $this->level = $level;
//     }

//     /**
//      * 获取物品
//      */
//     public function getTools(){
//         return $this->tools;
//     }
//     /**
//      * 设置物品
//      * @param array $tools
//      */
//     public function setTools($tools){
//         $this->tools = $tools;
//     }
    
    /**
     * 创建怪物
     * @param string $name  //怪物名
     * @param int $money    //怪物所掉金币
     * @param int $EXP      //怪物所掉经验
     * @param int $level      //怪物等级
     * @param array $tools //怪物所掉道具
     */
   public function __construct($name,$money,$EXP,$level,$tools){
       $this->name = $name;
       $this->money = $money;
       $this->EXP = $EXP;
       $this->level = $level;
       $this->tools = $tools;
   }
    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    /**
     * 查看怪物信息
     */
    public function lookMonster(){
       echo "怪物名称：".$this->name."&nbsp;".
        "怪物所掉金币：".$this->money."&nbsp;".
        "怪物所掉道具：".print_r($this->tools)."&nbsp;".
        "怪物所掉经验：".$this->EXP."<br/>";
    }
    
   
}
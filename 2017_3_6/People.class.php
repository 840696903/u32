<?php
/**
 * 玩家类
 * @author Administrator
 *
 */
class People
{   
    private  $name; //姓名
    private  $money;//当前金币
    private  $bag ;//背包
    private  $EXP;//当前经验
    private  $level;//当前等级
    private  $hp;    //血量
    private  $atk;   //攻击力
    private  $def;   //防御力
    
    
    
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
     * @return the $bag
     */
    public function getBag()
    {
        return $this->bag;
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
     * @return the $hp
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return the $atk
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @return the $def
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Ambigous <int, the> $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @param array $bag
     */
    public function setBag($bag)
    {
        $this->bag = $bag;
    }

    /**
     * @param Ambigous <int, number> $EXP
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
     * @param field_type $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @param field_type $atk
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;
    }

    /**
     * @param field_type $def
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

    /**
     * 创建人物
     * @param string $name  姓名
     * @param int $money    所持金币
     * @param array $bag    背包
     * @param int $EXP      当前经验
     * @param int $level    当前等级
     */
    public function __construct($name,$money=0,$bag,$EXP=0,$level=1,$hp,$atk,$def){
        $this->name = $name;
        $this->money = $money;
        $this->bag = $bag;
        $this->EXP = $EXP;
        $this->level = $level;
        $this->hp = $hp;
        $this->atk = $atk;
        $this->def = $def;
    }
    /**
     * 使用食物
     * @param Food $f
     */
    public function useFood(Goods $f){
        $f->beUse($this);
    }
    /**
     * 查看人物信息
     */
    public function  showMyself(){
            echo "姓名:".$this->name."&nbsp;".
            "当前金币：".$this->money."&nbsp;".
            "当前经验:".$this->EXP."&nbsp;".
            "当前等级:".$this->level.
            "当前血量:".$this->hp."&nbsp;".
            "当前攻击:".$this->atk."&nbsp;".
            "当前防御:".$this->def."&nbsp;"."&nbsp;<br/>";
    }
    
    /**
     * 购买商品 
     * @param Goods $g      //购买商品名称
     * @param int $count //购买商品数量 默认为1
     */
    public function buyGoods(Goods $g,$count = 1){
        $lterMoney =$this->money - $g->getPrice() * $count; //购买商品后用户余额
        $allnumber = $g->getAllnumber() - $count;            //购买商品后的商品剩余数量
        $g->setAllnumber($allnumber);
        if ($g->getAllnumber() <0 ){
            echo "<br/>剩余商品数量不足！";
            return ;
        }
        if ($lterMoney < 0){
            echo "<br/>您的金币不足！";
            return ;
        }
        $this->setMoney($lterMoney);
        $this->bag->putIntoBag($g,$count);  //购买商品后用放入背包
        echo $this->name."：您已经成功购买".$g->getName()."&nbsp;".$count.
        "个&nbsp;共花费金币".$g->getPrice()*$count."个"."&nbsp;剩余金币：".$this->money."个";
    }
    
    public function salGoods(Goods $g,$count = 1){
        $this->bag->salGoodsOutBag($g,$count);
        $money = $this->money + $g->getPrice() * $count;
        $this->setMoney($money);
    }
    /**
     * 丢弃道具
     * @param Goods $g
     * @param int $count
     */
    public function outGoods(Goods $g,$count){
        $this->bag->putOutBag($g,$count);
    }
    
    /**
     * 杀怪物
     * @param Monster $m
     */
    public function killMonster(Monster $m){
        $levelD = $m->getLevel() - $this->level; //人物与怪物等级差
        $this->money += $m->getMoney();             //杀怪得到金币
        if (abs($levelD) > 5){
            $getEXP = 0;
        }else {
            $getEXP =  $m->getEXP() + $m->getEXP() * $levelD * 0.2;
        }
        $allEXP = $this->EXP + $m->getEXP();         //人物经验
        echo $this->name."&nbsp;获得金币".$m->getMoney()."个；&nbsp;"."经验".$getEXP."；&nbsp;";
        $this->bag->collectTools($m);           //杀怪随机得到道具
        $this->upLevel($allEXP);
        echo "当前金币：".$this->money."；&nbsp;当前等级:".$this->level."；&nbsp;当前经验：".$this->EXP."；<br/>";
    }
    /**
     * 升级
     * @param int $allEXP
     */
    public function upLevel($allEXP){
        while (true){
            $thisLevelEXP = $this->level * $this->level * 100;//当前等级升级所需经验
            if ($allEXP >= $thisLevelEXP){
                $this->level++;
                $allEXP = $allEXP - $thisLevelEXP;
            }else {
                $this->EXP = $allEXP;
                break;
            }
        }
    }
   
}

?>
<?php
/**
 * 药水类
 * @author Administrator
 *
 */
class Medicine extends Goods
{
    private $hp;    //血量
    private $atk;   //攻击力
    private $def;   //防御力
    /**
     * 
     * @param unknown $name
     * @param unknown $price
     * @param unknown $allnumber
     * @param unknown $hp
     * @param unknown $atk
     * @param unknown $def
     */
    public function __construct($name, $price, $allnumber,$hp,$atk,$def){
        parent::__construct($name, $price, $allnumber);
        $this->hp = $hp;
        $this->atk = $atk;
        $this->def = $def;
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
     * @param unknown $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @param unknown $atk
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;
    }

    /**
     * @param unknown $def
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

    public function showMedicine(){
        echo "名称：".$this->name."&nbsp;".
            "价格：".$this->price."&nbsp;".
            "数量：".$this->allnumber.
            "血量:".$this->hp."&nbsp;".
            "攻击:".$this->atk."&nbsp;".
            "防御:".$this->def."&nbsp;"."<br/>";
    }
    public function beUse(People $p){
        echo $p->getName()."已经使用了".$this->getName();
        $p->setHp($p->getHp()+ $this->hp);
        echo "血量增加：".$this->hp;
        $p->setAtk($p->getAtk()+ $this->atk);
        echo "攻击力增加：".$this->atk;
        $p->setDef($p->getDef()+ $this->def);
        echo "防御力增加：".$this->def."<br/>";
    }
}

?>
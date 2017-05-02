<?php
/**
 * 装备类
 * @author Administrator
 *
 */
class Equipment extends Goods
{
    private $atk;   //攻击力
    private $def;   //防御力
    /**
     * 
     * @param unknown $name
     * @param unknown $price
     * @param unknown $allnumber
     * @param unknown $atk
     * @param unknown $def
     */
    public function __construct($name, $price, $allnumber,$atk,$def){
        parent::__construct($name, $price, $allnumber);
        $this->atk = $atk;
        $this->def = $def;
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

    public function beUse(People $p){
        echo $p->getName()."已经装备了".$this->getName();
        $p->setAtk($p->getAtk()+ $this->atk);
        echo "攻击力增加：".$this->atk;
        $p->setDef($p->getDef()+ $this->def);
        echo "防御力增加：".$this->def."<br/>";
    }
}

?>
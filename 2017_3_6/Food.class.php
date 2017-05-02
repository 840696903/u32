<?php
/**
 * 食物类
 * @author Administrator
 *
 */
class Food extends Goods
{   
    private $hp;    //血量
    /**
     * 
     * @param string $name
     * @param int $price
     * @param int $allnumber
     * @param int $hp
     */
    public function __construct($name, $price, $allnumber,$hp){
        parent::__construct($name, $price, $allnumber);
        $this->hp = $hp;
    }
    
    public function beUse(People $p){
        echo $p->getName()."已经使用了".$this->getName();
        $p->setHp($p->getHp()+ $this->hp);
        echo "血量增加：".$this->hp."<br/>";
    }
}

?>
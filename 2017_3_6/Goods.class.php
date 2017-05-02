<?php
/**
 * 商品类
 * @author Administrator
 *
 */
class Goods
{
    private $name;//商品名字
    private $price;//商品售价
    private $allnumber = 1;//剩余商品数量
    
    /**
     * 创建商品
     * @param string $name  //商品名字
     * @param int $price    //商品售价
     * @param int $allnumber//剩余商品数量
     */
    public function __construct($name,$price,$allnumber){
        $this->name = $name;
        $this->price = $price;
        $this->price = $allnumber;
    }
    
//     public function beUse(People $p){
//         echo $p->getName()."已经使用了".$this->getName();
//     }
    /**
     * 
     * @return string
     */
    public function __toString(){
        return $this->name."商品-- 名字<br/>";
    }
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return the $allnumber
     */
    public function getAllnumber()
    {
        return $this->allnumber;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Ambigous <unknown, int> $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param number $allnumber
     */
    public function setAllnumber($allnumber)
    {
        $this->allnumber = $allnumber;
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
//      * 获取价格
//      */
//     public function getPrice(){
//         return $this->price;
//     }
//     /**
//      * 设置价格
//      * @param int $price
//      */
//     public function setPrice($price){
//         $this->price = $price;
//     }
    
//     /**
//      * 获取数量
//      */
//     public function getAllnumber(){
//         return $this->allnumber;
//     }
//     /**
//      * 设置数量
//      * @param int $allnumber
//      */
//     public function setAllnumber($allnumber){
//         $this->price = $allnumber;
//     }
    
    /**
     * 显示商品信息
     */
    public function showGoods(){
        echo "商品名称：".$this->name."&nbsp;".
        "商品价格：".$this->price."&nbsp;".
        "商品数量：".$this->allnumber."<br/>";
    }
}
?>
<?php
/**
 * 背包类
 * @author Administrator
 *
 */
class Bag
{
    private  $goodsArray = array(); //背包内现有的物品
    /**
     * 获取背包物品
     */
    public function getGoodsArray($goodsArray){
        $this->goodsArray = $goodsArray;
    }
    /**
     * 设置背包物品
     * @param array $goodsArray
     */
    public function setGoodsArray($goodsArray){
        $this->goodsArray = $goodsArray;
    }
    /**
     * 查看背包
     */
//     public function lookBag(){
//         echo "<br/>背包物品：";
//         foreach ($this->goodsArray as $key => $values){
//                 echo $key."有".$values."个；&nbsp;";
//         }
//         echo "<br/>";
//     }
    public function __toString(){
        return "商品-- 名字".$this->name."商品-- 名字<br/>";
    }
//     public function lookBag(){
//         echo "<br/>背包物品：";
//         echo $this->goodsArray."--<br/>";
//     }
    /**
     * 捡道具
     * @param Monster $m
     */
    public  function collectTools(Monster $m){
        $index = rand(0,count($m->getTools())-1);
        foreach ($this->goodsArray as $key => $values){
            if ($key == $m->getTools()[$index]->getName()){
                $values++;
                return ;
            }
        }
        $goodsArray = array($m->getTools()[$index]->getName() => 1 ) +  $this->goodsArray;
        $this->setGoodsArray($goodsArray);
        echo "&nbsp;1个".$m->getTools()[$index]->getName()."；&nbsp;";
    }
    /**
     * 商品放入背包
     * @param Goods $g   //商品
     * @param int $count    //数量
     */
    public  function putIntoBag(Goods $g,$count = 1) {
        foreach ($this->goodsArray as $key => $values){
            if ($key == $g->getName()){
                $goodsArray = array($key => $count + $values) +  $this->goodsArray;
                $this->setGoodsArray($goodsArray);
                return ;
            }
        }
        $goodsArray = array($g->getName() => $count ) +  $this->goodsArray;
        $this->setGoodsArray($goodsArray);
    }
    
    public function salGoodsOutBag(Goods $g,$count=1){
        foreach ($this->goodsArray as $key => $values){
            if ($key == $g->getName()){
                if ($values < $count){
                    echo "现有：".$key.$values."个&nbsp;"."选择卖掉数量大于现有数量，请重新选择！";
                }else if ($values == $count){
                    unset($this->goodsArray[$key]);
                    echo "已成功卖掉：".$key.$count."个！获得金币：".$g->getPrice() * $count."<br/>";
                }else {
                    $goodsArray = array($key =>$values - $count ) +  $this->goodsArray;
                    $this->setGoodsArray($goodsArray);
                    echo "已成功卖掉：".$key.$count."个！获得金币：".$g->getPrice() * $count."<br/>";
                }
            }
        }
    }
    /**
     * 将商品从背包中扔掉
     * @param Goods $g   //商品
     * @param int $count    //数量
     */
    public  function putOutBag(Goods $g,$count=1) {
        foreach ($this->goodsArray as $key => $values){
            if ($key == $g->name){
                if ($values < $count){
                    echo "现有：".$key.$values."个&nbsp;"."选择扔掉数量大于现有数量，请重新选择！";
                }else if ($values == $count){
                    unset($this->goodsArray[$key]);
                    echo "已成功扔掉：".$key.$count."个！<br/>";
                }else {
                    $this->goodsArray = array($key =>$values - $count ) +  $this->goodsArray;
                    echo "已成功扔掉：".$key.$count."个！<br/>";
                }
            }
        }
    }
}

?>
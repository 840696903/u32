<?php
namespace theNew;
/**
 * 
 * 这是一个人类
 *
 * @author Administrator
 *
 */
abstract class Person
{
    private $name;  //姓名
    private $age;   //年龄
    private $sex;   //性别
    private $phone; //手机号
    
    
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return the $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param field_type $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @param field_type $phone
     */
     public function __construct($name,$age,$sex,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->phone = $phone;
    }
    /**
     * 
     */
    abstract public function say();
}



?>
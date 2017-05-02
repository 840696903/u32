<?php
namespace theNew;

/**
 * 学生类
 * @author Administrator
 *
 */
class Student extends Person
{
    private $stuId;
    const SCHOOL_NAME = "重大";
    
    
    /**
     * @return the $stuId
     */
    public function getStuId()
    {
        return $this->stuId;
    }

    /**
     * @param field_type $stuId
     */
    public function setStuId($stuId)
    {
        $this->stuId = $stuId;
    }

    /**学生
     * @param string $name
     * @param int $age
     * @param int $sex
     * @param string $phone
     */
    public function __construct($name,$age,$sex,$phone,$stuId) {
        parent::__construct($name, $age, $sex, $phone);
        $this->stuId = $stuId;
    }
    /**
     * 
     * {@inheritDoc}
     * @see Person::say()
     */
    public function say() {
        echo $this->getName()."来自".self::SCHOOL_NAME."。<br/>";
    }
}

?>
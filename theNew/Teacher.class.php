<?php
namespace theNew;
/**
 * 
 * @author Administrator
 *
 */
class Teacher extends Person
{
    private $classNumber; //所班级
    
    /**
     * @return the $classNumber
     */
    public function getClassNumber()
    {
        return $this->classNumber;
    }

    /**
     * @param field_type $classNumber
     */
    public function setClassNumber($classNumber)
    {
        $this->classNumber = $classNumber;
    }

    /**
     * 构造教师
     * @param string $name
     * @param int $age
     * @param int $sex
     * @param string $phone
     */
    public function __construct($name,$age,$sex,$phone,$classNumber) {
        parent::__construct($name, $age, $sex, $phone);
        $this->classNumber = $classNumber;
    }
    /**
     * 
     * {@inheritDoc}
     * @see Person::say()
     */
    public function say(){
        echo $this->classNumber."所教的班级中，期末考试只有一个人满分。"."。<br/>";
    }
    
}

?>
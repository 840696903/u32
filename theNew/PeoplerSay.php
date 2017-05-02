<?php
    
    require_once 'Person.class.php';
    require_once 'Student.class.php';
    require_once 'Teacher.class.php';

    use theNew\Teacher;
    use theNew\Student;
    
//     $people1 = new Person("张三", 18, "男", "13254658523");
//     $people1->say();
    $s1 = new Student("李凯", 13, "男", "15652312456",1254);
    $s1->say();
    $t1 = new Teacher("王大勇", 35, "男", "18865458952","u32");
    $t1->say();
    

?>
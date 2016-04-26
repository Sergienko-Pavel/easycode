<?php

abstract class Human
{
    protected $_knowledge;
    protected $_age;
    protected $_name;
    protected $_id;

    public function __construct($id, $name, $age, $knowledge) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_age = $age;
        $this->_knowledge = $knowledge;
    }
     public function getId() {
        return $this->_id;
    }

    public function getAge() {
        return $this->_age;
    }

    public function getName() {
        return $this->_name;
    }
    public function getKnowledge(){
    	return $this->_knowledge;
    }
      public function live(Courses $courses) {
        if ($courses->addStudents($this)) {
            echo $this->getName() . ' is studies now in ' .
                $courses->getName();
        } else {
            echo $this->getName() . ' is not studies in school ' .
                $courses->getItSchool()->getName();
        }
    }
}    
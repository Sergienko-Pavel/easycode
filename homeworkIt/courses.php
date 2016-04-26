<?php

class Courses{

public $name;
public $students =array(); 
protected $_knowledge;
protected $studentsRestiction = 20;
protected $_ItSchool;

public function __construct($name='Default name', $knowledge='Default name')
{
        $this->name = $name;
        $this->_knowledge = $knowledge;

    }

    public function addStudents(Human $students) {
    	if (!$this->getItSchool()->getstudentsById($students->getId())) {
            return false;
        }

        if ($this->getstudentsCount() >= $this->_studentsRestiction) {
            return false;
        }

        $this->students[$students->getId()] = $students;
        return true;
    }
    public function getKnowledge() {
        return $this->_knowledge; 
    }
    public function setKnowledge() {
        return $this->_knowledge = $human; 
    }

    public function getStudentsCount() {
        return count($this->students);
    }

    public function setTeacher(Human $human) {
        if (!$this->getKnowledge = $knowledge) {
        	return false;
            // TODO: add exception
        } else {
            $this->_teacher = $human;
        }
    }
      public function getTeacher() {
        return $this->_teacher;
    }

    public function getName() {
        return $this->name;
    }

    public function setItSchool(ItSchool $ItSchool) {
        $this->_ItSchool = $ItSchool;
    }

    public function getItSchool() {
        return $this->_ItSchool;
    }
}    

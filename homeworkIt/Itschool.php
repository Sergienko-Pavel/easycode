<?php
require_once "courses.php";
require_once 'woman.php';
require_once 'man.php';

class ItSchool {
	protected $name;
	public $coursesPull = array();
    public $students = array();
	
	function __construct($name)
	{
		$this->_name = $name;
	}
	public function buildCourses(Courses $objCourses) {
        $objCourses->setItSchool($this);
        $this->_addCoursesToPull($objCourses);
	}

    protected function _addCoursesToPull(Courses $objCourses) {
    	$this->coursesPull[$objCourses->getName()] = $objCourses;
    }

    public function destroyCourses($name) {
    	unset($this->coursesPull[$name]);
    }
     public function getName() {
        return $this->_name;
    }
    public function getAllCourses() {
    	return $this->coursesPull;
    }

    public function addStudents(Human $students) {
        $this->students[$students->getId()] = $students;
    }

    public function getStudentsCSunt() {
        return count($this->students);
    }

    public function getStudentsById($id) {
        return isset($this->students[$id])
            ? $this->students[$id]
            : false;
    }

}
$ItSchool = new ItSchool('EC');
$courses = new Courses('php');

$man = new Man(1, 'Bogdan', 23, 'php');
$woman = new Woman(2, 'Olga', 19 , 'js');
$ItSchool->addStudents($man);

$courses->setTeacher($man);
$man->live($courses);
echo 'ItSchool:' ;
echo '<pre>';
print_r($ItSchool);
echo '<pre>';
echo 'Courses:' ;
echo '<pre>';
print_r($courses);
echo '<pre>';
echo 'Man:' ;
echo '<pre>';
print_r($man);
echo '<pre>';

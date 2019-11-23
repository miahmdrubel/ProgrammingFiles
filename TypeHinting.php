<?php


class DepartmentInfo {


public $departmentName;
public $chairman;
public $classRoom;
public $numberOfStudents;


public function __construct($dept, $chair, $room, $stdNumber) {
$this->departmentName = $dept;
$this->chairman = $chair;
$this->classRoom = $room;
$this->numberOfStudents = $stdNumber;
}


public function departmentActivity() {
echo "Deartment of " . $this->departmentName . " arrange a tour in every year" . "<br/>";
}


}


/*
class CourseInfo{
   public $numberOfCoursees;

  public function __construct($cInfo){
      $this->numberOfCoursees = $cInfo;
  }

  public function assignTeacher(TeacherInfo $tinfo){
  	  echo $tinfo->teacherName . " is taking" . $this->numberOfCoursees. " Courses.";
  	  echo $tinfo->teacherName . " has " . $this->numberOfCoursees. " Offered Courses."; 
  }

}
*/

class TeacherInfo{
public $teacherName;
public function __construct($tName) {
$this->teacherName = $tName;
}

//If We use  object as a function paremeter we need to mention the class name before the object so that php 
// Engine can Identify that object.Its called Type Hinting.

public function getTeacher(DepartmentInfo $dept){
echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department <br>";
echo $this->teacherName . " give teaching " . $dept->numberOfStudents . " Students";
}

}


$dept = new DepartmentInfo("CSE", "Dr.Monirul Islam", 10, 250);
$tinfo = new TeacherInfo("Dr. M. Kaykobad");
$tinfo->getTeacher($dept);

//$cInfo = new assignTeacher(178);
//$cInfo->assignTeacher($tinfo);

?>

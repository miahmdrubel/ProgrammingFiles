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

  public function assignTeacher( $tinfo){
  	 if($tinfo instanceof $TeacherInfo){
  	  echo $tinfo->teacherName . " is taking" . $this->numberOfCoursees. " Courses.";  	  
  	  echo $tinfo->teacherName . " has " . $this->numberOfCoursees. " Offered Courses."; 
  	}else{
  		die("Sorry \$tinfo is not a object of class TeacherInfo");
  	}
	  

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

/*
public function getTeacher(DepartmentInfo $dept){
echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department <br>";
echo $this->teacherName . " give teaching " . $dept->numberOfStudents . " Students";
}

*/

  //TypeHinting use of instanceof keyword=>

public function getTeacher($dept) {
if ($dept instanceof DepartmentInfo) {
echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department";
}else{
die("Sorry \$dept is not a object of class DepartmentInfo");
}
}

}


$dept = new DepartmentInfo("CSE", "Dr.Monirul Islam", 10, 250);
$tinfo = new TeacherInfo("Dr. M. Kaykobad");
$tinfo->getTeacher($dept);

// $cInfo = new assignTeacher(178);
 //$cInfo->assignTeacher($tinfo);

?>

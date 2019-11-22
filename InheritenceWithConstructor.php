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

public function meetupActivity() {
  echo "Deartment of " . $this->departmentName . " Should arrange a tour in every Semester" . "<br/>";
 }

}
 
class EEEDept extends DepartmentInfo {
 public $labsNumber;
 public function __construct($dept, $chair, $room, $stdNumber, $labs) {
   parent::__construct($dept, $chair, $room, $stdNumber);
   $this->labsNumber = $labs;
 }

  public function Robotic(){
  	 echo " Deartment of " .$this->departmentName . "should arrange Robotic competition in university like all other reputed 
  	     university" ."<br>";
  }  

  public function IntelligentProject(){
  	 echo "Deartment of" .$this->departmentName . "Need to make real world project for mankind." ."<br>";
  }  
    public function IEEE(){
  	 echo "Deartment of" .$this->departmentName . "Need to make IEEE Brance for student Improvement and for helping purpose ." ."<br>";
  }  
}
 

 class BBA extends DepartmentInfo {
 public $labsNumber;
 public function __construct($dept, $chair, $room, $stdNumber, $labs) {
   parent::__construct($dept, $chair, $room, $stdNumber);
   $this->labsNumber = $labs;
 }

  public function CaseStudy(){
  	 echo " Deartment of " .$this->departmentName . "should arrange Case Solving competition in university like
  	  all other reputed  university" ."<br>";
  }  

  public function IntelligentProject(){
  	 echo "Deartment of" .$this->departmentName . "Need to make real world project for mankind." ."<br>";
  }  
    public function giveShowSkill(){
  	 echo "Deartment of" .$this->departmentName . "Need to give Some Soft skill Lessons ." ."<br>";
  }  
}
 
class CseDept extends DepartmentInfo {
 public $labsNumber;
 public function __construct($dept, $chair, $room, $stdNumber, $labs) {
   parent::__construct($dept, $chair, $room, $stdNumber);     // If parent class Constructor is need from child class then  parent::construct() is used. 
   $this->labsNumber = $labs;
}
 
 public function programmingActivity() {
   echo "Department of " . $this->departmentName . " should arrange programming contest like other university" . "<br/>";
 }
 public function projectShowCasing() {
   echo "Department of " . $this->departmentName . " should arrange Project projectShowCasing So that they can 
        show there potential in this field" . "<br/>";
 }

  public function ResearchWork() {
   echo "Department of " . $this->departmentName . " should Encourage Students to Research in Upcoming Fields" . "<br/>";
 }
  public function Assignment() {
   echo "Department of " . $this->departmentName . " should give Assignment to the Students in real world related Works." . "<br/>";
 }
  public function PracticalWork() {
   echo "Department of " . $this->departmentName . " should arrange Internship for Students
      in Semester Break which they are gain through out the semester .". "<br/>";
 }
 


}
 
 echo "******************************  Info about EEE Department in AIUB ***********************************<br> ";
$EEE = new EEEDept(" electrical Engineering", "Dr. Mannan Majumder", 125, 3500, 12);
echo $EEE->labsNumber . " labs are available in " . $EEE->departmentName . " department <br/>";
echo "Chairman - " . $EEE->chairman . " * Students - " . $EEE->numberOfStudents . "<br/>";
$EEE->Robotic();
$EEE->IEEE();
$EEE->IntelligentProject();
$EEE->departmentActivity();
$EEE->meetupActivity();
 
  echo "******************************  Info about CSE Department in AIUB ***********************************<br> ";
$cse = new CseDept("Computer Science and Engineering", "Dr.Dip Nandi ", 250, 4000, 19);
echo $cse->labsNumber . " lab available in " . $cse->departmentName . " department <br/>";
echo "Chairman - " . $cse->chairman . " * Students - " . $cse->numberOfStudents . "<br/>";
$cse->departmentActivity();
$cse->meetupActivity();
$cse->programmingActivity();
$cse->ResearchWork();
$cse->projectShowCasing();
$cse->PracticalWork();
$cse->Assignment();

  echo "******************************  Info about BBA Department in AIUB ***********************************<br> ";
$Bba = new CseDept(" Bachelar of Business Administration", " Dr.Samsung Biadin  ", 125, 2700, 8);
echo $Bba->labsNumber . " lab available in " . $Bba->departmentName . " department <br/>";
echo "Chairman - " . $cse->chairman . " * Students - " . $Bba->numberOfStudents . "<br/>";
$Bba->departmentActivity();
$Bba->meetupActivity();
$Bba->CaseStudy();
$Bba->IntelligentProject();
$Bba->giveShowSkill();



?>

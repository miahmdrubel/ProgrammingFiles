<?php
 
abstract class DepartmentInfo {
 
abstract public function departmentActivity();
}
 
class StatisticsDept extends DepartmentInfo {
 
public function departmentActivity() {
echo "Statistics department arrange a tour yearly<br/>";
}
 
}
 
class CseDept extends DepartmentInfo {
 
public function departmentActivity() {
echo "CSE department should arrange programming contest<br>";
}
 
}

class EEEDept extends DepartmentInfo {

	 public function departmentActivity() {
	 	echo "EEE Department Should Arrange Robotic Competition in every Semester.<br>";
	 }
}

 
$sdept = new StatisticsDept();
$sdept->departmentActivity();
$cdept = new CseDept();
$cdept->departmentActivity();
$eeedept = new EEEDept();
$eeedept->departmentActivity()

?>

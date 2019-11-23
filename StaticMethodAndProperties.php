<?php


class DepartmentInfo {

//Static variable and function behave like global variable and methods because it can be accessable from 
	 // Any where of the code.


    public static $departmentName;  //Static variable or class variable
    public static $chairman;


public static function departmentHead($dName, $chair) {  //Static Method or Class Method.It can be use without
	  // creating object of that class thats why it is called class function. 
self::$departmentName = $dName;
self::$chairman = $chair;
echo "Department - " . self::$departmentName . "<br/>" . "Chaiman - " . self::$chairman . "<br/>";

//Static variable can be accessed by static method. Other not static variable not possible to access using
  //this-> operator because object is not created.
     
}


}



class Student{

   

   public static $name;          //By Default Public.Accesseable from any where .
    public static $id;       //Can be Accessed within class. 
     private $cgpa;     // Access by class and from Inherite class. 
 

   public  static function getInfo($name,$id){  //Default cgpa =2.5
      
  	  echo "************************* Info about $name ********************************<br>";
      echo "My Name is:". self:: $name = $name. "<br/>";
      echo "My  University ID:". self:: $id = $id."<br/>";
   //  echo "My Current Cgpa is:". self:: $cgpa = $cgpa."<br/>";

      
    }
     
  
}

//static variable can be access from outside the class but its need to
 // to use className::(scope Resolation Operator)variableName or Methos name.     

 echo "<br>**********************************Info about CSE department***************************<br>";
DepartmentInfo::departmentHead("CSE", "Dr. Dip Nandi");
echo DepartmentInfo::$departmentName;

 echo "<br>**********************************Info about Students of CSE department***************************<br>";
         Student::getInfo("Miah Md.Rubel","16-32108-2");


?>

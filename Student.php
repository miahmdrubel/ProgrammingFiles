

<?php

 echo "*********************Student Object Info*******************************.<br>";

class Student{

   
define("GREETING", "Welcome to W3Schools.com!");
   public $name="Miah,Md Rubel";
   public $id = "16-32108-2"; 
   public $cgpa = 3.77;


  function getInfo($name,$id,$cgpa=2.5){  //Default cgpa =2.5
      
  	  echo "************************* Info about $name ********************************<br>";
      echo "My Name is:". $this->$name = $name."<br/>";
      echo "My  University ID:". $this->$id = $id."<br/>";
     echo "My Current Cgpa is:". $this->$cgpa = $cgpa."<br/>";
      echo "My  University Name:". $this->$uniName."<br/>";
      
    }
     
  
}

 $student1 = new Student();

 $student1->getInfo(" Miah Md Rubel " , " 16-32108-2 " );
 $student1->getInfo(" Shahriar Mahmud Shuvo " , " 16-32106-2 " , 3.80);
 $student1->getInfo(" Masud Reza Apu " , " 16-32105 " , 3.5);
 $student1->getInfo("  Alamin " , " 16-12108-2 " , 3.9);
 $student1->getInfo(" Sakil Ahmed Rajon" , " 16-4108-2 " , 3.82);

 echo "************************** Initiatize Elements*************************************** .<br>";
  echo "Name:".$student1->name."<br>";
  echo "ID:".$student1->id."<br>";
  echo "CGPA:".$student1->cgpa."<br>";

/*

   echo "***********************  Class And Object Concept is very much Interesting.**************************";

 
?>



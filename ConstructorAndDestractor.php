

<?php

 echo "*********************Teacher Object Info*******************************.<br>";

class  Teacher{

   public $name;
   public $id ; 
   public $salary;
   



       // Constructor function is a codeblock which is execute automatically at
             // the time of object Creation.  Syntax:__(double Undercore)construct()

  function __construct($name,$id,$salary){  
      
  	  echo "************************* Info about $name ********************************<br>";
           $this->$name = $name;
           $this->$id = $id;
           $this->$salary = $salary;
           
      
    }
      public function getInfo(){
     echo " Name ".$this->name." <br> ID: ". $this->id ."<br>Salary:".$this->salary;
 }
 
  
}

  $Teacher1 = new Teacher("Miah,Md Rubel","16-32108-2",550000);
  $Teacher1.getInfo();
  
    $Teacher2 = new Teacher("Shahriar Mahmud Shuvo","16-3210",55000);
    $Teacher2.getInfo();
   
    $Teacher3 = new Teacher("Apu","16-32145-2",55000);
    $Teacher3.getInfo();

    $Teacher4 = new Teacher("Rasel","16-32134-2",50000);
    $Teacher4.getInfo();



// When object is used by the page it need to free the memery.
   //__destruct function manually free this memory.
//public function __destruct(){
//echo "Finally distructor called";
//}

   echo "***********************  Concept of Constructor and destructor is very much Interesting.**************************";

 
?>



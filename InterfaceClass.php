<?php

 //Interface class like as abstract class. But Abstract class can have  function body.
  //But in Interface class parent class have no body.Clild class Implement parent class
   // Interface method.  

interface Moveable {     // Interface class start with interface keyword Instead of class Keyword.


public function move();
}


interface Test {


public function testMove();
}

//Child class can not inherit parent class.It Just only can Implement 
 // Parent function. One child class can Implement more than one Interface method.   
class Man implements Moveable, Test {


public function move() {
echo "A man can move<br/>";
}


public function testMove() {
echo "Multiple Interface multiple inheritence<br/>";
}


}


class Vehicle implements Moveable {


public function move() {
echo "A Vehicle also can move<br/>";
}


}

class Laptop implements Test {

  public function testMove() {
      echo "My Laptop Can Move First";
  }
	
}


$mans = new Man();
$mans->move();
$mans->testMove();
$machine = new Vehicle();
$machine->move();
$Laptop = new Laptop();
$Laptop->testMove();

?>

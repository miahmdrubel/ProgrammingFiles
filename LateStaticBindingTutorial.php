<?php
class Cat {
 public static function run() {
   echo 'Cat runs';
 }

 //Self does not work fine in inheritence  if we call Leopard::tester(); Cat runs 
  // will be show in Output instead of Leopard runs faster than cat.
  //If we Use static keyword instead of self then inheritence will work fine.  

 public static function tester() {
  self::run();    // show output Cat runs when call Leopard::tester();
  static::run();  // show output  Leopard runs faster than cat when call Leopard::tester();
 }
}
class Leopard extends Cat {
 public static function run() {
  echo 'Leopard runs faster than cat';
 }
}

class User {
  static protected $r = 'normal user';
  public static function tester() {
   echo static::$r;
 }
}
class Agent extends User {
 static protected $r = 'This is agent';
}



echo "<br>*************************************First Examle of Late static binding Tutorial************************<br>";
Leopard::tester();


echo "<br><br>*************************************Second Example if Late static binding Tutorial************************<br>";
Agent::tester();
?>
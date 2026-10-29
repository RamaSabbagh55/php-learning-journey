<?php

// public يعني تقدرين توصلين للخاصية من خارج الكلاس.
// private يعني ما تقدرين توصلين للخاصية مباشرة من خارج الكلاس.
class Color{
public $name="black";//default value 
private  $hex;
// إنشاءكونستراكتور الهدفمنه يتنفذ  اول ما اسوي اوبجكت 
function __construct($colorName,$hex){
$this -> name=$colorName;
$this -> hex=$hex;
}




// تسمى ميثود في الكلاس 
function getName($hex){
echo $this-> name; }
}

//الهدف منه بين الاقواس يروحوا للكونستراكتور
$white = new Color ("balx","#ffff");
$white ->name="white";// يجدث قيمة الاوبجكت 
$white -> getName("#Ffff");

class User{
 public $name="example";
 
public $Username;
    
function profile(){
echo $this-> name ;
}
}
class Person extends User{

}
$user1 = new User();
$user1->name ="ahmed";
$user1 ->profile();
class Admin extends User{

}
?>
<?php
trait Method{
function sayHeelo(){
    echo"hi";
}  


} 

class User{
    use Method;
}
$user= new User();
$user-> sayHeelo()
?>
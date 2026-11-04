<?php

$user="admin";
$pass=12345; 
if($_POST["name"]===$user&&$_POST["password"]===$pass){
echo "تم تسجيل الدخول بنجاح";

}else{
echo "اسم المستخدم أو كلمة المرور غير صحيحة";
}
?>
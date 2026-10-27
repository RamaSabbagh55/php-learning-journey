<?php
$Ydate=readline("Enter year of birth: ");
$Mdate=readline("Enter year of month: ");
$Ddate=readline("Enter year of day: ");
$Udate=$Ydate."/".$Mdate."/".$Ddate;
$birth =new DateTime($Udate);
$current = new DateTime();
$result = $birth->diff($current);
echo "Your age is: " . $result->y . " years\n";
echo $result->m . " months\n";
echo $result->d . " days\n";
?>
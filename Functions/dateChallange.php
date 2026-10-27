<?php
$Ydate=readline("Enter year of birth: ");
$Mdate=readline("Enter year of month: ");
$Ddate=readline("Enter year of day: ");
$Udate=$Ydate."/".$Mdate."/".$Ddate;
echo" My Age:  ". $Udate;
$Cdate=date("Y/m/d");
echo "Current Date: ".$Cdate;
$result=$Cdate-$Udate;
echo $result
?>
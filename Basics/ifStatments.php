


<?php
// Password Validation
echo"whats uour passwords?";
$enter=readline();
if($enter==12345){
  echo"Welcome\n"; 
}else
   echo "I don’t know you!!\n";
//تحدي : تحويل الأرقام إلى الأسماء Numbers to Names

$num=readline("Please enter the number of the month:");

switch($num){
    case (1):
    echo"The name of the month is January";
    break;
    case (2):
    echo"The name of the month is February";
    break;
    case (3):
    echo"The name of the month is March";
    break;
      case (4):
    echo"The name of the month is April";
    break;
      case (5):
    echo"The name of the month is May";
    break;
      case (6):
    echo"The name of the month is June";
    break;
      case (7):
    echo"The name of the month is July";
    break;
      case (8):
    echo"The name of the month is August";
    break;
      case (9):
    echo"The name of the month is September";
    break;
      case (10):
    echo"The name of the month is October";
    break;
      case (11):
    echo"The name of the month is November";
    break;
      case (12):
    echo"The name of the month is December";
    break;
    default:
    echo"False!! enter a number from 1-12";
    break;
}
?>

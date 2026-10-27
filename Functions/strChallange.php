<?php
// استقبل جملة نصية من المستخدم

// اطبع للمستخدم القائمة التالية :

// 1. calculate string length
// 2. replace the word 
// 3. convert small letters to capital letters
// عند اختيار رقم واحد احسب طول الجملة واطبع القيمة
// عند اختيار رقم اثنين استقبل الكلمة المراد استبدالها والكلمة الجديدة واستبدلها في النص واطبع الجملة بعد الاستبدال -عند اختيار رقم ثلاثة استبدل كل حرف small الى حرف capital في اول كل كلمة.
// تلميح : استخدم switch 
while(true){
$str=readline("\nEnter statments: ");
$num =readline("Choose an number: 
1. calculate string length
2. replace the word 
3. convert small letters to capital letters
4.End");

switch ($num ){
    case 1:
   echo strlen($str);
   break;
    case 2:
   echo str_replace($str,"rama","Hello moh\t");
   break;
     case 3:
   echo strtoupper($str);
   break;
case 4:
    echo"Good Bye 👋";
    break 2;// تطلع من اللوب ومن ال switch 

default:
echo "Choose number form 1-4";

}
}
?>
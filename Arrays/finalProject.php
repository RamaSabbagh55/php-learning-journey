<?php
// ملاحظة هذا المشروع لا يسلم هو فقط لتاكد من فهمك لمفاهيم هذه الدورة.

// انشئ Array تحتوي على اسماء الطلاب .
//     Ali 
//     Norah 
//     Ahmad 
//     Khalid
//     Sarah
//     Reem
//     Deema
//     Mohammed 
//     Abdullah 
// اطبع للمستخدم القائمة التالية
//     1. print Array
//     2. Delete 
//     3. Update 
//     4. Add
//     5. count 
//     Enter your choice: 
// استقبل من المستخدم مدخل يمثل رقم العملية
// اذا المستخدم دخل الرقم واحد (يمثل عملية القراءة) اطبع له عناصر المصفوفة باستخدام foreach

// اذا المستخدم دخل الرقم اثنين (مثل عملية الحذف) استقبل من المستخدم رقم Index المراد حذفه وبعدها اطبع محتويات المصفوفة باستخدام print_r

//     Enter the Index: 
// اذا المستخدم دخل رقم ثلاثة (يمثل عملية التحديث) استقبل من المستخدم رقم Index المراد تحديثه والقيمة المحدثة وبعدها قم بطباعة محتويات المصفوفة باستخدام print_r
//     Enter the Index: 
//     Enter new value: 
// اذا المستخدم دخل رقم اربعة (يمثل عملية الاضافة) استقبل اسم الطالب المراد اضافته وبعدها قم بطباعة محتويات المصفوفة باستخدام print_r
//     Enter value: 
// اذا المستخدم دخل رقم خمسة قم بطباعة حجم المصفوفة
// في حال كان الرقم المدخل ليس من ١ الى ٥ اطبع رسالة الخطأ التالية
//     invaild number  
//  تلميح: قم باستخدام switch. 

// $students=["Ali", 
//     "Norah", 
//      "Ahmad",
//     "Khalid",
//     "Sarah",
//     "Reem",
//     "Deema",
// "Mohammed" ,
// "Abdullah"];

$input=readline("Choose A number: 
    1. print Array
    2. Delete 
    3. Update 
    4. Add
    5. count 
    Enter your choice: ");

switch($input){
 case (1):
   foreach($students as $str ){
      echo $str . "\n";
   }
    break;
    case (2):
   $index=readline("Enter the index: ");
   unset($students[$index]);
   print_r($students);
    break;
    case (3):
    $index=readline("Enter the index: ");
    $value=readline("Enter new value: ");
$students[$index]= $value;
    print_r($students);
    break;
      case (4):
    $value=readline("Enter new value: ");
$students[]=$value;
    print_r($students);
    break;
      case (5):
     echo "the count of array: ".count($students);
    break;
    default:
    echo"invaild number";

}

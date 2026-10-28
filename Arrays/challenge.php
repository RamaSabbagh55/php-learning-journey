<?php
// قم بانشاء برنامج يطلب من المستخدم إدخال دولة ثم يطبع يطبع رقم المفتاح

// المخرجات

//     Country: Saudi Arabia
//     Country Calling Code : 966
//انشئ associative array بحيث key يمثل اسم الدولة اما القيمة تمثل رقم مفتاح الدولة :
$input=readline("Enter Country name: ");
$country=array(
"Saudi Arabia"=>966,
"Kuwait"=> 965,
"Egypt"=> 20 ,
"United Arab Emirates"=> 971,
);

if (isset($country[$input])) {
    echo "Country: " . $input;
    echo "\nCountry Calling Code : " . $country[$input] . "\n";
} else {
    echo "Country not found!\n";
}
?>
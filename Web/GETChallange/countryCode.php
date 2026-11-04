<?php
$CCode=array(
"Saudi Arabia"=>966,
"Kuwait"=> 965,
"Egypt"=> 20 ,
"United Arab Emirates"=> 971,
);
if (isset($_GET["name"])){// هنا استخدمنا isset عشان نتحقق من وجود مفتاح في الطلب وعدم ارساله فارغ 
$countrtName=$_GET["name"];
if(array_key_exists($countrtName,$CCode)){
    echo $countrtName .": ".$CCode[$countrtName] ;
}else{
        echo "اسم الدولة غير موجود ضمن القائمة.";
};

}else{

echo "يرجى إدخال اسم الدولة للبحث عن مفتاح الاتصال الخاص بها.";
};
?>
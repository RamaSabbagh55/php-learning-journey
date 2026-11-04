<?php
$CCode=array(
"Saudi Arabia"=>966,
"Kuwait"=> 965,
"Egypt"=> 20 ,
"United Arab Emirates"=> 971,
);
$countrtName=$_GET["name"];
if(array_key_exists($countrtName,$CCode)){
    echo $countrtName .": ".$CCode[$countrtName] ;
}else{
        echo "اسم الدولة غير موجود ضمن القائمة.";
};


?>
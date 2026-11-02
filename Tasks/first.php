<?php

$str =readline("Choose an number: 
        1. Check if the file exists or not.
        2. Reading from the file.
        3. write to file
        4. Print file size
        5. Delete the file
        6. Print the current file path
        7. Exit
\n");


switch ($str ){
    case 1:
 $file = readline("Enter file name \n");
    echo file_exists("Tasks/$file")?"yes":"no";
   break;
    $file = readline("Enter file name:  \n");
$length=readline("Enter the number of characters to read (or 'all' for all content): ");
fopen(Tasks/$file,"r");
    case 2:
$file = readline("Enter file name:  \n");
$length=readline("Enter the number of characters to read (or 'all' for all content): ");
$file2 = fopen("Tasks/$file","r");
if ($length ==="all"){
$moh=filesize("Tasks/exp.txt");
echo $moh;
echo fread($file2,filesize("Tasks/$file"));

}else{
echo fread($file2,$length);
}
fclose($file2);
 break;
     case 3:
   echo ucwords($str)."\n\n";
   break;

default:
echo "Choose number form 1-4";

}


?>
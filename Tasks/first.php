<?php
while (true) {
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
   $filename = readline("Enter the file name: ");
            $text = readline("Enter the text to write: ");
            $file = fopen($filename, "w");
            fwrite($file, $text);
            fclose($file);
            echo "Text written to the file.\n";
            break;

echo "Choose number form 1-4";
  case 4:
     $filename = readline("Enter the file name: ");
     if(file_exists($filename)){
echo filesize($filename);
}else{echo "File does not exist.\n";}
    break;

    case 5:
        $filename = readline("Enter the file name you want to delete it: ");
        if (file_exists( $filename)){
  unlink($filename);
 echo "File deleted.\n";
        }else{
          echo "File does not exist.\n";
        }
      break;

      case 6: 
        $filename = readline("Enter the file name: ");
            if (file_exists($filename)) {
                echo "Current file path: " . realpath($filename) . "\n";
            } else {
                echo "File does not exist.\n";
            }
            break;
        break; 

        case 7:
            echo "Thank you\n";
            exit();

      default:echo "Invalid choice. Please try again.\n";
       



}

}
?>
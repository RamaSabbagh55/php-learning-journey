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
 $filename = readline("Enter file name to Check if the file exists or not \n");
    echo file_exists("Tasks/$filename")?"yes":"no";
   break;
 
//     case 2:
// $filename = readline("Enter file name:  \n");
// $length=readline("Enter the number of characters to read (or 'all' for all content): ");
// $file = fopen("Tasks/$filename","r");
// if ($length ==="all"){
// $res=filesize("Tasks/exp.txt");
// echo $res;
// echo fread($file,filesize("Tasks/$filename"));

// }else{
// echo fread($file,$length);
// }
// fclose($file);
//  break;
 
   case 2:
            $filename = readline("Enter the file name to reading from the file:  \n");
            $chars = readline("Enter the number of characters to read (or 'all' for all content): \n ");
            if (file_exists($filename)) {
                $file = fopen($filename, "r");
                if ($chars === 'all') {
                    echo fread($file, filesize($filename));
                } else {
                    echo fread($file, (int)$chars);
                }
                fclose($file);
            } else {
                echo "File does not exist.\n";
            }
            break;

     case 3:
   $filename = readline("Enter the file name to write it on the file: \n ");
            $text = readline("Enter the text to write: \n ");
            $file = fopen($filename, "a");
            fwrite($file, $text);
            fclose($file);
            echo "Text written to the file.\n";
            break;

echo "Choose number form 1-4";
  case 4:
     $filename = readline("Enter the file name to print the file size: \n ");
     if(file_exists($filename)){
echo filesize($filename);
}else{echo "File does not exist.\n";}
    break;

    case 5:
        $filename = readline("Enter the file name you want to delete it: \n ");
        if (file_exists( $filename)){
  unlink($filename);
 echo "File deleted.\n";
        }else{
          echo "File does not exist.\n";
        }
      break;

      case 6: 
        $filename = readline("Enter the file name: \n ");
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
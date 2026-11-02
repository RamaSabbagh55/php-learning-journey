<?php

function printMenu() {
    echo "\n1. create a folder.\n";
    echo "2. Check if the folder exists.\n";
    echo "3. Read the contents of the folder.\n";
    echo "4. Delete the folder. \n";
    echo "5. Print the path of the current folder\n";
    echo "6. Exit.\n";

}

while (true) {
    printMenu();
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $foldername = readline("Enter the folder name you want to created: ");
            if (! is_dir($foldername)) {// يعني اذا المجلد مو موجود انشأ لي واحد جديد
            mkdir($foldername);
            } else {
                echo "The folder does already exist.\n";
            }
            break;

        case 2:
            $foldername = readline("Enter the folder name: ");
            if (is_dir($foldername)) {
               echo "The folder exists.\n";
            } else {
                echo "Folder does not exist.\n";
            }
            break;

        case 3:
               $foldername = readline("Enter the folder name to display the its  content : ");
            if (is_dir($foldername)) {
               echo "The folder exists.\n";
               print_r(scandir($foldername));//for arrays 
            } else {
                echo "Folder does not exist.\n";
            }
            break;

        case 4:
             $foldername = readline("Enter the folder name to deleted: ");
            if (is_dir($foldername)) {
               echo redir($foldername);//for arrays 
                echo "The folder deleted.\n";
            } else {
                echo "Folder does not exist.\n";
            }
            break;

        case 5:
        
            if (is_dir( __DIR__)) {
               echo "Current folder path: ". __DIR__ ."\n";//for arrays 
           
            } else {
                echo "Folder does not exist.\n";
            }
            break;
    

        case 6:
            echo "Thank you\n";
            exit();

        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>
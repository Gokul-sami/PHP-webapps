<?php

    $myfile = fopen("sample.txt", "r") or die("Unable to open file!");
    
    //echo fread($myfile,filesize("sample.txt"));
    
    $content = fread($myfile,filesize("sample.txt"));
    echo "<br>".$content;
    fclose($myfile);
    
  
    // Read single line   
    
    $myfile = fopen("sample.txt", "r") or die("Unable to open file!");

    $content= fgets($myfile);
    echo "<br>";
    echo $content;
    fclose($myfile);

    // Read line by line
    $myfile = fopen("sample.txt", "r") or die("Unable to open file!");
    echo "<br><br><br>";
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
      }
    fclose($myfile);

    

    // Read character by character  
    $myfile = fopen("sample.txt", "r") or die("Unable to open file!");
    echo "<br><br><br>";
    while(!feof($myfile)) {
        echo fgetc($myfile) . "<br>";
      }
    fclose($myfile);


    // Writing to a file
    $myfile = fopen("samplenew.txt", "w") or die("Unable to open file!");
    $txt = "Hello new content written\n";
    fwrite($myfile, $txt);
    $txt = "some more content going to be written ";
    fwrite($myfile, $txt);
    fclose($myfile);

    // Appending to a file  
    $myfile = fopen("samplenew.txt", "a") or die("Unable to open file!");
    $txt = "***contents appended---\n";
    fwrite($myfile, $txt);
    $txt = "more appended contents ";
    fwrite($myfile, $txt);
    fclose($myfile);
?> 























<? php
/*
Modes 	Description
r 	Open a file for read only. File pointer starts at the beginning of the file
w 	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x 	Creates a new file for write only. Returns FALSE and an error if file already exists
r+ 	Open a file for read/write. File pointer starts at the beginning of the file
w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists

fwrite($file,$name.PHP_EOL);

*/
?>
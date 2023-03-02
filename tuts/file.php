<?php

//file system - part 1

//open file for read only
//$handle = fopen($file, 'r'); 

//read file 
//echo fread($handle, filesize($file));
//echo fread($handle, 10);

//read a single line
//echo fgets($handle);
//echo fgets($handle);

//read a single char
//echo fgetc($handle);
//echo fgetc($handle);

//read and write to file
$file = 'readme.txt';

chmod($file, 0666);

try {
    $handle = fopen($file, 'a+'); //a+ allows append to the file r+ overwrites the file

    fwrite($handle, "aaaa");

  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
  
  if (isset($handle)) {
    echo "The 'r+' mode is supported on this installation.";
  }

  //close the file 
  fclose($handle);

  //delete the file
  unlink($file);

/* if (file_exists($file)) {
    echo readfile($file);

    copy($file, 'copy.txt');

    echo realpath($file); //get absolute path

    echo filesize($file);

    rename($file, 'test.txt');



} else {
    echo "file does not exist";
}
 */

?>
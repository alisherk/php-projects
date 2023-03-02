<?php 
try {
    // code that might throw an exception
    if (!file_exists("test.txt")) {
       throw new Exception("File not found");
    }
 } catch (Exception $e) {
    // code to handle the exception
    echo "Error: " . $e->getMessage();
 }
 
?>
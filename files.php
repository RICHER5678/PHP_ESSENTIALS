
<?php
// Opening a file using fopen() 
// function in read only mode
$myfile = fopen("/home/folder1/gfg.txt", "r") 
                 or die("File does not exist!");
?>

<?php
// Opening a file
$myfile = fopen("gfg.txt", "w");
  
// writing content to a file using fwrite()
echo fwrite($myfile, "yes come here!");
  
// closing the file
fclose($myfile);
?>
<?php
// PHP program to delete a file named gfg.txt
// using unlink() function
 
$file_pointer = "gfg.txt";
 
// Use unlink() function to delete a file
if (!unlink($file_pointer)) {
    echo ("$file_pointer cannot be deleted due to an error");
}
else {
    echo ("$file_pointer has been deleted");
}
 
?>

<?php
  
// Opening a directory
$dir_handle = opendir("/user/gfg/docs/");
  
if(is_resource($dir_handle))
{ 
    echo("Directory Opened Successfully.");
} 
  
// closing the directory
closedir($dir_handle);
  
else
{
    echo("Directory Cannot Be Opened.");
} 
  
?>
<?php

// reading contents from the
// google home page
$homepage = file_get_contents("https://www.google.com
							/");
echo $homepage;

?>
<?php

// checking last accessed time of a file
echo fileatime("gfg.txt");

?>


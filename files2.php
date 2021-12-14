<!--The getcwd() function in PHP is an inbuilt function which is 
used to return the current working directory. This function does not accepts 
any parameter and returns the current working directory on successful function
 call or FALSE on failure.-->

<?php
//current directory
$cur_dir = getcwd();

echo("Current Directory is " . $cur_dir);

echo "<br>" ;

//changing current directory
$flag = chdir("user/home/articles");

if($flag == true)
{
$cur_dir = getcwd();
echo("Directory Has Been Successfully Changed to " . $cur_dir);
}
else
{
echo("Failed to Change Directory.");
}
?>
<!--The chdir() function in PHP used to change PHP’s current directory to new directory path. It takes only a single argument as new directory path.--
<?php
// To get current working directory
echo getcwd() . "<br>";
  
// Change directory function
chdir("testing_gfg");
  
// To get current working directory
echo getcwd();
?> 

<?php
// making a directory with default mode i.e 0777
mkdir("/documents/gfg/articles/");
?>
<?php

// Opening a directory
$dir_handle = opendir("/user/gfg/docs/");

if(is_resource($dir_handle))
{
	echo("Directory Opened Successfully.");

	// closing the directory
	closedir($dir_handle);
}
else
{
	echo("Directory Cannot Be Opened.");
}

?>



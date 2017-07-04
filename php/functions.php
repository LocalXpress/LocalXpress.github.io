<?php
//function to generate the contents of the directory
function file_contents_of($dir)
{
$dir_name=array();
if (is_dir($dir))
{
  if ($dh = opendir($dir))
  {
    while (($file = readdir($dh)) !== false)
    {
      $dir_name[]=$dir.'/'.$file;
    }
    closedir($dh);
  }
}
	return $dir_name;
}
?>
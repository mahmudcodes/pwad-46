<?php 

$file = '../../bootstraps/b.jpg';
echo "filesize = ".$bytes = filesize($file)." Byte";
echo "<br>";
$file = '../../bootstraps/b.jpg';
echo $kilobytes = "filesize = ".round(filesize($file)/1024,3)."Kilobyte";

 ?>
 <?php 	

echo "<br>";
 $drive = 'F:/';
 echo "drive name = ".$drive."<br>";
echo "Remaining size: ". round((disk_free_space($drive) / 1073741824),2)."GB";
echo "<br>";
echo "Total size: ". round((disk_total_space($drive) / 1073741824),2)."GB";
 ?>
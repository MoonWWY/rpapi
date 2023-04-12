<?php
$img_array = glob("img/horizontal/*.{gif,jpg,png,jpeg,GIF,JPG,PNG,JPEG}",GLOB_BRACE); 
$img = array_rand($img_array);
$dz = $img_array[$img];
die(header("Location:".$dz));
?>
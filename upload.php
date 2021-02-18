<?php
if(isset($_POST['btn-upload']))
{
        $pic = rand(1000,100000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="uploaded_files/";
        $cmd = "./i2k $folder$pic $pic_loc";
        system($cmd,$ret_val);
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
}
if(isset($_POST['btn-url-up']))
{
	$url_in = $_POST["pic"];
	$cmd = "./url-up $url_in";
        system($cmd,$ret_val);
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IGC to KMZ converter</title>
</head>
<body>
<h4 style="padding-left:10px">Upload IGC tracklog</h4>
<form action="" method="post" enctype="multipart/form-data">
<div style="padding-left:20px">
<input type="file" name="pic"/>
<button type="submit" name="btn-upload">upload</button>
</div>
<h4 style="padding-left:10px">Or</h4>
<div style="padding-left:20px">
<input type="text" onfocus="this.value=''" value="Paste igc URL here" name="pic"/>
<button type="submit" name="btn-url-up">upload from URL</button>
</div>
</form>
</body>

<?php 

require_once("vendor/autoload.php");

\Tinify\setKey("YOUR_API_KEY");

$images = glob('images/*.{jpeg,jpg,png}', GLOB_BRACE);

var_dump($images);
if (!file_exists('compressed')) {
    mkdir('compressed', 0777, true);
}

foreach($images as $image){
	$source = \Tinify\fromFile($image);
	$source->toFile(str_replace("images","compressed",$image));
}


 ?>
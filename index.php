<?php

header("Content-type: image/png");
header('Content-Type: image/gif');
// $string ='salom';
// $image= imagecreatefrompng("photo.png");
// $orange = imagecolorallocate($im, 220, 210, 60);
// $px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
// imagestring($im, 5, $px, 9, $string, $orange);
// imagepng($im);
// imagedestroy($im);

// 1. get image size //

$image="photo.png";
// $size=getimagesize("photo.png");
// // print_r($size);

// // var_dump($size[3]);

// list($width, $height, $type, $image_info, $mime)=$size;
// echo "info= ". $image_info;



// $width=$width*2;
// $height=$height*2;

// echo "<img src='photo.png' width=$width height=$height $attr alt=\"getimagesize() example\" />";

// $data = file_get_contents($image);
// $size_info1 = getimagesizefromstring($data);

// var_dump($size_info1);


// 1. create image //

// Create image instance
// $im = imagecreatetruecolor(500, 500);
// $text_color = imagecolorallocate($im, 0, 255, 255);

// // Save image
// // imagedestroy($im);

// $text_color = imagecolorallocate($im, 0, 255, 255);
// imagecolorallocate($im, 255,255,255);
// $text_color=imagecolorallocatealpha($im, 255,255,255, 50);
// imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// imagecolorclosest (
//      $im ,
//     55 ,
//     255 ,
//     255
// );

// imagepng($im);
// imagepng($im, './test1' . image_type_to_extension(IMAGETYPE_PNG));
// imagedestroy($im);

list($width, $height)=getimagesize($image);
$image=imagecreatefrompng($image);
// list($width, $height)=getimagesize("photo.png");
$dest = imagecreatetruecolor($width+100, $height+100);

// // var_dump($width);

// $text="Bissmillah deb 4d538r8345$%^&* boshlang";
    

// $text_color=imagecolorallocatealpha($image, 255,0,0, 0);
// imagestring($image, 5, $width/2-strlen($text)/2, $height/2, $text, $text_color);
// imagestringup($image, 5, $width/2-(strlen($text)/2), $height,$text, $text_color );

// imagecopy($dest, $image, 50, 50, 100, 100, $width, $height);

// imagepng($dest, './test1' . image_type_to_extension(IMAGETYPE_PNG));
// imagepng($dest);

// imagecopyresampled (
//      $dest,
//      $image,
//     0 ,
//     0 ,
//     0 ,
//     15 ,
//     700 ,
//     700 ,
//     1000 ,
//     1000
// );

// imagepng($dest);


$yo=$height/2;
$xo=$width/2;


// $image2=imagecrop($image, ['x' => -300+$xo, 'y' => -300+$yo, 'width' => 600, 'height' => 600]);
// imagepng($image2, "./imagecrop". image_type_to_extension(IMAGETYPE_WEBP));



$color=imagecolorallocate($image, 255,255,255);
// imageellipse($image, $xo, $yo, $width-20, $height-20, $color);
// imagefill($image, 0, 0, $color);
// imagepng($image);
// imagepng($image, "./ellipse". image_type_to_extension(IMAGETYPE_PNG));

$pink = imagecolorallocate($image, 255, 105, 180);
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 132, 135, 28);

// Draw three rectangles each with its own color
imagerectangle($image, 0, 0, $width-5, $height-5, $pink);
imagerectangle($image, 5, 5, $width-10, $height-10, $white);
imagerectangle($image, 10, 10, $width-15, $height-15, $green);


imagepng($image);
imagepng($image, "./rectangle". image_type_to_extension(IMAGETYPE_PNG));

<?php
function image_size($image)
{
    $data = getimagesize($image);
    $width = $data[0];
    $height = $data[1];
    $size=$width.'X'.$height;
    return $size;
}
function resizeImage($resourceType,$image_width,$image_height,$desiredWidth,$desiredHeight) {
    $imageLayer = imagecreatetruecolor($desiredWidth,$desiredHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$desiredWidth,$desiredHeight, $image_width,$image_height);
    return $imageLayer;
}
?>
<?php


$im = imagecreatefromjpeg("background_bambukas.jpg");
$sti = '';
for ($t=1; $t < 200; $t++){
for ($i=1; $i < 200; $i++){



$rgb = imagecolorat($im, $i, $t);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;



$sti .='<div style="position:absolute; background:rgb('.$r.','.$g.','.$b.'); height:1px; width:1px; margin-left:'.$i.'px; margin-top:'.$t.'px"></div>';



}}
echo $sti;
?>
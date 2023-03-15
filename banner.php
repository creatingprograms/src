<?php
declare(strict_types=1);
require_once('Request.php');
require_once('Manager.php');

$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);
header('Content-Type: image/gif');
imagegif($im);

if(isset($_SERVER['REMOTE_ADDR'])) {
if (!empty($_SERVER['REMOTE_ADDR'])) {
$filterIP = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
if($filterIP) {
$ip = $filterIP;
$request = new Request($ip);
$manager = new Manager($request);
$manager->handle();
}
}
}
?>

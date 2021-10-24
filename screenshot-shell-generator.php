<?php

$domains = "google.com
prdistribution.com
mediaoutlets.com
mediacontactslist.com";

$screenshotWidth = "1920";
$screenshotHeight = "1200";
$resize = "1400"; 
// To turn off resizing, comment out line below that says: echo "sips -Z $resize $filename\n";

foreach(preg_split("/((\r?\n)|(\r\n?))/", $domains) as $domain){
    $filename = str_replace(".","_",$domain).".png";
    echo "/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --headless --disable-gpu --ignore-certificate-errors --window-size=$screenshotWidth,$screenshotHeight https://$domain --screenshot=$filename\n";
    echo "sips -Z $resize $filename\n";
} 

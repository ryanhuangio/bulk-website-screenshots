<?php

$URLs = "https://www.google.com
https://www.prdistribution.com
https://www.mediaoutlets.com
https://www.mediacontactslist.com";

$screenshotWidth = "1920";
$screenshotHeight = "1200";
$resize = "1400"; // To turn off resizing, comment out line below that says: echo "sips -Z $resize $filename\n";
$timeout = "10"; // The script will wait 10 seconds on each URL 

foreach(preg_split("/((\r?\n)|(\r\n?))/", $URLs) as $URL){
    $filename = str_replace(".","_",$domain).".png";
    $filename = str_replace("://","_",$filename);
    $filename = str_replace("/","_",$filename);
    echo "timeout $timeout /Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --headless --disable-gpu --ignore-certificate-errors --window-size=$screenshotWidth,$screenshotHeight $URL --screenshot=$filename\n";
    echo "sips -Z $resize $filename\n";
} 

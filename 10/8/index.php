<?php
echo strtotime ("now"), "\n";
echo ":".date("Y-m-d H:i:s",strtotime ("now")),"<br>";
echo strtotime ("21 May 2009"), "\n";
echo ":".date("Y-m-d H:i:s",strtotime ("21 May 2009")),"<br>";
echo strtotime ("+3 day"), "\n";							
echo ":".date("Y-m-d",strtotime ("+3 day")),"<br>";
echo strtotime ("+1 week")."<br>";
echo strtotime ("+1 week 2 days 3 hours 4 seconds")."<br>";
echo strtotime ("next Thursday")."<br>";
echo strtotime ("last Monday"), "\n";
?>

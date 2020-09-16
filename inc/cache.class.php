<?php
$web_cache=$row['web_cache'];
if ($web_cache<>'0'){
$maxtime=time();
$interval=60 * $web_cache;// 秒*分钟
header ("Last-Modified: " . gmdate ('r', $maxtime)); 
header ("Expires: " . gmdate ("r", ($maxtime + $interval))); 
header ("Cache-Control: max-age=".$interval);
}
?>
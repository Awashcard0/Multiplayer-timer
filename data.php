<?php
header('Content-Type: text/event-stream;charset=utf-8');
header('Cache-Control: no-cache,no-store,max-age=0,must-revalidate');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: post-check=0, pre-check=0', false );
header('Pragma: no-cache');
header('Expires: 0');
header('Connection: keep-alive');
header('X-Accel-Buffering: no');

$lines = file("time.dat");


foreach ($lines as $line){
  foreach ($words as $word) {
    $len = str_repeat("#", strlen($word));
    $line = str_ireplace($word, $len, $line);
  }
    echo 'retry: 1'."\n";
    echo 'data: '.$line."\n\n";
    ob_end_flush();
    flush();
}
?>
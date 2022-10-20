<!DOCTYPE html>
<?php
//$name = ;

function loginSend() {
  $time = $_POST['time'];
  $msg = $_POST['msg'];
  return $time." ".$name."：".$msg;
}
//if (!$name) {
  $time = $_POST['time'];
  $content = $_POST['msg'];
  $msg = $content;
  if($msg == '') {exit;}

  $sample = fopen("time.dat","a");
  $input = $msg.'​͘';
  //fwrite($sample, $input);
  fwrite($input);
  fclose($sample);
//}
?>
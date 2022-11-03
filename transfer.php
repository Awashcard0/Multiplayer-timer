<h1>No errors</h1>
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
  $msg = $time." "."Timer"."：".$content;
  //$msg = $content

  $sample = fopen("time.dat","w");
  //$sample = fopen("time.dat","a");
  $input = $msg.'​͘';
  //$input = $msg.'​͘';
  //fwrite($input, $input);
  fwrite($sample, $input);
  //fwrite($input);
  fclose($sample);
//}
?>
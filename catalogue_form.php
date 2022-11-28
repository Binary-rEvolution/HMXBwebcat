<?php
header("Content-type: text/plain");
if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message_contents = $_POST['message'];
$date = date('m/d/Y h:i a', time());

header('Content-Disposition: attachment; filename="'+$name+'_'+$date+'.txt"');
print $message_contents;
}
?>





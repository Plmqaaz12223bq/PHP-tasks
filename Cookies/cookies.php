<?php
$cookie_name = $_POST['name'];
$cookie_value = $_POST['value'];
setcookie($cookie_name, $cookie_value, time() + 3600,'/TASKS/');


echo "Cookie named " . $cookie_name ." Cookie value ". $cookie_value. "The cookies will be expired after 1 hour.";

?>

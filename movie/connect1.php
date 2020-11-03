<?php

$user = "root";
$pass = "";
$db_name = "useraccount";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $user, $pass);
// $db->setAttribute(PDO::$AFTER_ERRMORE, PDO::$ERRMORE_EXCEPTION);
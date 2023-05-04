<?php

$name = $_POST['form_name'];
$email = $_POST['form_email'];
$phone = $_POST['form_phone'];
$subject = $_POST['form_subject'];
$message = $_POST['form_message'];


$connection = new mysqli('localhost', 'softworld', 'access$4ME', 'formdata');

if ($connection->connect_error) {
    echo $connection->connect_error;
}

//echo 'Connection ok';

$insert = $connection->query("insert into record(name,email,phone,subject, message) value('$name','$email','$phone','$subject','$message')");

if ($connection->error) {
    echo $connection->error;
} else {
    echo "Submission ok";
}
<?php

require(__DIR__."\..\Controllers\SignupController.php");
require_once(__DIR__."\..\Controllers\UserController.php");
$usercontrol = new UserController();
$signup = new SignupController();
$email = $_GET["email"];
$id = $_GET["id"];
$prev_email = $usercontrol->getEmail($id);

$ok = $signup->emailExists($email);
if($ok || ($email == $prev_email))
{
    echo "not";
}
else
{

    echo "exists";
}




 ?>

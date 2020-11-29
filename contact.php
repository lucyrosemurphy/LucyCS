<?php
if($_POST["message"]) {
    mail("lucyrosemurphy@gmail.com",
    $_POST["subject"],
    $_POST["firstname"] $_POST["lastname"]  $_POST["message"]  $_POST["email"],
    "From: an@email.address");
}
?>
<!DOCTYPE html>

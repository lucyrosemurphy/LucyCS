<?php
if($_POST["message"]) {
    mail("lucyrosemurphy@gmail.com",$_POST["subject"],$_POST["message"],"From: an@email.address");
}
?>
<!DOCTYPE html>

<?php

if(isset($_POST["submit"]) && $_FILES["file"]["name"] !== "") {

    $target_dir = dirname(__FILE__).'/../../../root/folder 1/';
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    } 

    $url = "../../";
    header ('Location:' . $url);
    exit();


} else if (isset($_POST["submit"]) && $_FILES["file"]["name"] == ""){
    $url = "../../";
    header ('Location:' . $url);
    exit();
}


?>
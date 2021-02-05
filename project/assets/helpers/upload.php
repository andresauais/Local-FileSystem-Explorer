<?php

if(isset($_POST["submit"]) && $_FILES["fileToUpload"]["name"] !== "") {

    $target_dir = dirname(__FILE__).'/../../../root/folder 1/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    } 

    $url = "../../";
    header ('Location:' . $url);
    exit();


} else if (isset($_POST["submit"]) && $_FILES["fileToUpload"]["name"] == ""){
    $url = "../../";
    header ('Location:' . $url);
    exit();
}


?>
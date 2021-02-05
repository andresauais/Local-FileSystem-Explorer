<?php

if(isset($_POST["submit"], $_POST['dir']) && $_FILES["file"]["name"] !== "") {
    $dir=$_POST['dir'];
    $target_dir = dirname(__FILE__). "/../../../". $dir . "/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    } 

    $url = "../../index.php?dir=" . $dir;
    header ('Location:' . $url);
    exit();


} else if (isset($_POST["submit"], $_POST['dir']) && $_FILES["file"]["name"] == ""){
    $dir=$_POST['dir'];
    $url = "../../index.php?dir=" . $dir;
    header ('Location:' . $url);
    exit();
}


?>
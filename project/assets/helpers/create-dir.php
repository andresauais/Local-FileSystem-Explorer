<?php

//validation to check if submit button was pressed and directory field is not empty
if(isset($_POST["submit"], $_POST['dir']) && !empty($_POST["directory"])) {
    $dir=$_POST['dir'];
    //get the directory name from the form
    $directoryName = $_POST["directory"];
    //create the path for the new directory
    $target_dir = dirname(__FILE__).'/../../../'. $dir . '/'.$directoryName;
    //make directory in specified path
    mkdir($target_dir);

    //return to the index page
    $url = "../../index.php?dir=" . $dir;
    header ('Location:' . $url);
    exit();

//if the directory field is empty
} else if (empty($_POST["directory"]) ){
    $dir=$_POST['dir'];
    //redirect to the index page without changes
    $url = "../../index.php?dir=" . $dir;
    header ('Location:' . $url);
    exit();
}



?>
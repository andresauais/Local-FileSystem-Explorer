<?php

//validation to check if submit button was pressed and directory field is not empty
if(isset($_POST["submit"]) && !empty($_POST["directory"])) {

    //get the directory name from the form
    $directoryName = $_POST["directory"];
    //create the path for the new directory
    $target_dir = dirname(__FILE__).'/../../../root/folder 1/'.$directoryName;
    //make directory in specified path
    mkdir($target_dir);

    //return to the index page
    $url = "../../";
    header ('Location:' . $url);
    exit();

//if the directory field is empty
} else if (empty($_POST["directory"]) ){

    //redirect to the index page without changes
    $url = "../../";
    header ('Location:' . $url);
    exit();
}



?>
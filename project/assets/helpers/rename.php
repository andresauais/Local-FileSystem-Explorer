<?php

//validation to check if submit button was pressed, dir and file params are set and new-name field is not empty
if (isset($_POST["submit"], $_POST['dir'], $_POST['file']) && !empty($_POST['new-name'])) {

    //Set variables to be accesed by either file or folder cases
    $dir = $_POST['dir'];
    $currentName = $_POST['file'];
    $newName = $_POST['new-name'];

    //If file param is not empty, it will be a file
    if ($currentName !== "") {
        //Find the file extension
        $extension = explode(".", $_POST['file'], 2)[1];
        //Rename the file path by changing the currentName for the newName and the extension
        rename("../../../" . $dir . "/".$currentName, "../../../" . $dir ."/". $newName . "." . $extension);
        //Set the url to the one of the selected file
        $url = "../../index.php?dir=" . $dir . "&file=" . $newName . "." . $extension;
        
    } 
    
    //If file param is empty, it will be a folder
    elseif ($currentName == "") {
        //Take the url values into an array, and set the latest value as the currentDir
        $dirArray = explode("/",$dir);
        $currentDir = array_pop($dirArray);
        //Replace the currentDir value for the newName in the $dir string
        $newDirname = str_replace($currentDir,$newName,$dir);
        //Rename the file path by changing the dir and currentName for the newDirname
        rename("../../../" . $dir . $currentName, "../../../" . $newDirname);
        //Set the url to the one of the selected folder
        $url = "../../index.php?dir=" . $newDirname;
    }

    //return to current folder with rename changes made
    header('Location:' . $url);
    exit();

    //if the directory field is empty
} else if (empty($_POST["directory"])) {
    $dir = $_POST['dir'];
    //redirect to the current folder page without changes
    $url = "../../index.php?dir=" . $dir;
    header('Location:' . $url);
    exit();
}

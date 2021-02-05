<?php

$dir = "../root/folder 1";
$scanDir = scandir($dir);
$currentDir = array_slice( $scanDir, 2 );

//create a Fileinfo class to store file information
class Fileinfo {
    public $image;
    public $name;
    public $type;
    public $size;
    public $created;
    public $modified;
};

//define an empty array to store the files found in $currentDir
$filesArray = array();


foreach($currentDir as $k => $v){
   
    // get the file extension
    if (array_key_exists('extension', pathinfo($v))){
        $extension = pathinfo($v)['extension'];
    } else {
        $extension = "";
    }

    //get the file name
    $fileName = pathinfo($v)['filename'];

    //get file size and create a string to print it
    //if filesize is smaller than 1000000bytes, print in KB. If not, print it in MB.
    //round to 2 decimals
    $fileSize = filesize("$dir/$v");
    $fileSizeString = $fileSize < 1000000? round(($fileSize / 100),2).' KB':round(($fileSize / 1000000),2).' MB';

    //Call function to return an image according to the extension passed by parameter
    $fileImage= getFileImage($extension);

    //get date of file modification and compare it with current date
    //if both are the same, return a string with hour and minute. If not, return string with Y-m-d
    $dateToday = date("Y-m-d");
    $dateModified = date("Y-m-d", filemtime("../root/folder 1/$v"));

   if($dateToday == $dateModified) {
        $fileModified = date("H:i", filemtime("../root/folder 1/$v"));
   } else {
        $fileModified = date("Y-m-d", filemtime("../root/folder 1/$v"));
   }
   

    //instantiate a new Fileinfo() object for each item on $currentDir array
    //add values for each object key
    $file = new Fileinfo();
    $file -> image = $fileImage;
    $file -> name = $fileName;
    $file -> type = $extension;
    $file -> size = $fileSizeString;
    $file -> created = date("Y-m-d", filectime("../root/folder 1/$v"));
    $file -> modified = $fileModified;
    
   //push each Fileinfo object to the $filesArray
   array_push($filesArray, $file);
   
}

//use the file extension info and return a corresponding image
function getFileImage($extension){
    switch($extension) {
        case "txt":
            $fileImage = "./assets/img/txt.png";
            break;
        case "doc":
            $fileImage = "./assets/img/doc.png";
            break;
        case "jpg":
            $fileImage = "./assets/img/jpg.png";
            break;
        case "jpg":
            $fileImage = "./assets/img/png.png";
            break;
        case "":
            $fileImage = "./assets/img/folder.png";
            break;
        default:
            $fileImage = "";
    }

    return $fileImage;
}



?>

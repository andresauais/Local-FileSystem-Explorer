<?php

$dir = "../root/folder 1";
$scanDir = scandir($dir);
$currentDir = array_slice( $scanDir, 2 );

class Fileinfo {
    public $image;
    public $name;
    public $type;
    public $size;
    public $created;
    public $modified;
};


foreach($currentDir as $k => $v){
    
    $filePath = pathinfo($v);
    if (array_key_exists('extension', $filePath)){
        $extension = $filePath['extension'];
    }

    $fileSize = filesize("$dir/$v");
    $fileSizeString = $fileSize < 1000? $fileSize.'KB':($fileSize/1000).'MB';
    $fileImage= getFileImage($extension);
   

    $file = new Fileinfo();
    $file -> image = $fileImage;
    $file -> name = $v;
    $file -> type = $extension;
    $file -> size = $fileSizeString;
    $file -> created = date("Y-m-d", filectime("../root/folder 1/$v"));
    $file -> modified = date("H:i", filemtime("../root/folder 1/$v"));
    

}

function getFileImage($extension){
    switch($extension) {
        case "txt":
            $fileImage = "txt";
            break;
        case "doc":
            $fileImage = "./assets/img/word_icon.png";
            // $fileImage = "doc";
            break;
        case "jpg":
            $fileImage = "jpg";
        case null:
            $fileImage = "null";
        default:
            $fileImage = "default";
    }

    // echo $fileImage;
    return $fileImage;
}




?>

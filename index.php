<?php
echo "Welcome to Arch-Tech<br/>";

$directoryPath = '/Users/Vijay/Sites/PHP/Crucible-CRT/app/';//directory path to parse

$directoryIterator = new RecursiveDirectoryIterator($directoryPath);//get all directories recursively
$iterator          = new RecursiveIteratorIterator($directoryIterator);//get all files in the directories recursively

//create a static array to store all files
$files = array();

foreach ($iterator as $directory) {
    if (fnmatch('*Controller.php', $directory)) {//get all controllers
        $files['Controllers'][] = $directory;
    }
    if (fnmatch('*Component.php', $directory)) { //get all Components
        $files['Components'][] = $directory;
    }
    if (fnmatch('*Model.php', $directory)) { //get all Models
        $files['Models'][] = $directory;
    }
    if (fnmatch('*Behaviors.php', $directory)) {  //get all Behaviors
        $files['Behaviors'][] = $directory;
    }
    if (fnmatch('*Helper.php', $directory)) { //get all Helpers
        $files['Helpers'][] = $directory;
    }
}

echo "<br/><br/>Application has,<br/>";
echo count($files['Controllers']) . " Controllers <br/>";
echo count($files['Components']) . " Components <br/>";
echo count($files['Models']) . " Models <br/>";
echo count($files['Behaviors']) . " Behaviors <br/>";
echo count($files['Helpers']) . " Helpers <br/>";

echo '<pre>';
var_dump($files['Controllers']);

//read all controllers
if($handle = readfile($files['Controllers'][0])){
    //get all methods
}
die;
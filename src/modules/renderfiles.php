<?php
require_once('./functions.php');
//get path from root user folder
$rootUserPath = getRootRelativeUserPath();

$arrayFiles = array_diff(scandir($rootUserPath), array('.','..' ));

$filesList = getFiles($rootUserPath, $arrayFiles);
$directories = getFolders($rootUserPath, $arrayFiles);

// var_dump($filesList);
// var_dump($directories);

foreach ($filesList as $file) {
  $infoFile = pathinfo($file);
  echo 'name'. $infoFile['basename'].'<br/>';
  echo 'creation date'. filectime($rootUserPath.$file).'<br/>';
  echo 'last modified date'. filemtime($rootUserPath.$file).'<br/>';
  echo 'extension'. $infoFile['extension'].'<br/>';
  echo 'size'. filesize($rootUserPath.$file).'<br/>';
  echo 'last acces time of file'. fileatime($rootUserPath.$file).'<br/>';
}

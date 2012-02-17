#!/usr/bin/php
<?php
echo formatpath("path/to/dokoka");

function formatpath($path){
$path=preg_match('/\/$/s',$path)?$path:$path."/";
return $path;
}
?>
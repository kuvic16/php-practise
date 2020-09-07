<?php

//$size = "  E  56 MPH";
$size = null;

$size = trim($size);
if (!empty($size)) {
    if (preg_match("/^[a-zA-Z]$/", $size[0])) {
        $size = substr($size, 1);
    }
}
$size = trim($size);

var_dump($size);

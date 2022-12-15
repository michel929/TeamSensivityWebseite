<?php
$path = $_SERVER['REQUEST_URI'];
$path = str_replace("/", "", $path);

if ($path == "michel929") {
    $username = $path;
    include "user-profile.php";
} else {
    include "404.php";
}
?>
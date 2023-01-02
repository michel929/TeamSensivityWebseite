<?php
$path = $_SERVER['REQUEST_URI'];
$path = str_replace("/", "", $path);

require_once("../inc/config.inc.php");
$i = 0;

$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    if ($path == $row["website_url"]) {
        include "user-profile.php";
        $i = 1;
    }
}

if ($i == 0) {
    include "404.php";
}
?>
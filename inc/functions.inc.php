<?php
$filename = basename(__FILE__, '.php');
if (str_contains($_SERVER['SCRIPT_FILENAME'], $filename)) {
    die("Permission denied!!");
}

function getTagName($id)
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM news_tags");
    while ($row = $stmt->fetch()) {
        if ($row["discord_id"] == $id) {
            return $row["name"];
        }
    }
}

function getTagArray($string)
{
    $str_arr = explode(",", $string);
    return $str_arr;
}

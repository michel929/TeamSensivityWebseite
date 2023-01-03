<?php
if (isset($_GET["steam_id"])) {
    $steam_id = $_GET["steam_id"];
    $steam_verify = 0;

    $url = 'https://steamcommunity.com/groups/TeamSensivityy/memberslistxml/?xml=1';
    $xmlurl = file_get_contents($url);
    $xml = simplexml_load_string($xmlurl);
    $json = json_encode($xml);
    $myarray = json_decode($json, TRUE);

    foreach ($myarray["members"]["steamID64"] as $value) {
        if ($steam_id == $value) {
            $steam_verify = 1;
        }
    }
}
?>

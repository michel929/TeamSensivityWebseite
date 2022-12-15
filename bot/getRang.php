<?php
$urls = 'https://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=381210&key=AAB98CE4EF65918FD5FE6209892F9F7E&steamid=' . $_GET['steam_id'];

$json = file_get_contents($urls);
$myarray = json_decode($json, true);

$pipss = 0;

for ($i = 0; $i < count($myarray["playerstats"]["stats"]); $i++) {
    if ($myarray["playerstats"]["stats"][$i]["name"] == "DBD_CamperSkulls") {
        $pipss = $myarray["playerstats"]["stats"][$i]["value"];
    }
}

$rangs = 20;
$in = "IV";
$color = "";

if ($pipss < 3) {
    $rangs = 20;
    $colors = "#afa484";
    $ins = "IV";
} else if ($pipss < 6) {
    $rangs = 19;
    $colors = "#afa484";
    $ins = "III";
    $pipss = $pipss - 3;
} else if ($pipss < 10) {
    $rangs = 18;
    $colors = "#afa484";
    $ins = "II";
    $pipss = $pipss - 6;
} else if ($pipss < 14) {
    $rangs = 17;
    $colors = "#afa484";
    $ins = "I";
    $pipss = $pipss - 10;
} else if ($pipss < 18) {
    $rangs = 16;
    $colors = "#c46a23";
    $ins = "IV";
    $pipss = $pipss - 14;
} else if ($pipss < 22) {
    $rangs = 15;
    $colors = "#c46a23";
    $ins = "III";
    $pipss = $pipss - 18;
} else if ($pipss < 26) {
    $rangs = 14;
    $colors = "#c46a23";
    $ins = "II";
    $pipss = $pipss - 22;
} else if ($pipss < 30) {
    $rangs = 13;
    $colors = "#c46a23";
    $ins = "I";
    $pipss = $pipss - 26;
} else if ($pipss < 35) {
    $rangs = 12;
    $colors = "#e7e2d6";
    $ins = "IV";
    $pipss = $pipss - 30;
} else if ($pipss < 40) {
    $rangs = 11;
    $colors = "#e7e2d6";
    $ins = "III";
    $pipss = $pipss - 35;
} else if ($pipss < 45) {
    $rangs = 10;
    $colors = "#e7e2d6";
    $ins = "II";
    $pipss = $pipss - 40;
} else if ($pipss < 50) {
    $rangs = 9;
    $colors = "#e7e2d6";
    $ins = "I";
    $pipss = $pipss - 45;
} else if ($pipss < 55) {
    $rangs = 8;
    $colors = "#e2b920";
    $ins = "IV";
    $pipss = $pipss - 50;
} else if ($pipss < 60) {
    $rangs = 7;
    $colors = "#e2b920";
    $ins = "III";
    $pipss = $pipss - 55;
} else if ($pipss < 65) {
    $rangs = 6;
    $colors = "#e2b920";
    $ins = "II";
    $pipss = $pipss - 60;
} else if ($pipss < 70) {
    $rangs = 5;
    $colors = "#e2b920";
    $ins = "I";
    $pipss = $pipss - 65;
} else if ($pipss < 75) {
    $rangs = 4;
    $colors = "#c01815";
    $ins = "IV";
    $pipss = $pipss - 70;
} else if ($pipss < 80) {
    $rangs = 3;
    $colors = "#c01815";
    $ins = "III";
    $pipss = $pipss - 75;
} else if ($pipss < 85) {
    $rangs = 2;
    $colors = "#c01815";
    $ins = "II";
    $pipss = $pipss - 80;
} else {
    $rangs = 1;
    $colors = "#c01815";
    $ins = "I";
    $pipss = 0;
}

echo $rangs;

?>
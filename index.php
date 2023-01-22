<?php
include "templates/head.php";

require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

$stmt = $pdo->query("SELECT * FROM bot");
while ($row = $stmt->fetch()) {
    $user_count = $row["user_count"];
    $user_online = $row["user_online"];
}

$hours = 0;

$stmt = $pdo->query("SELECT * FROM online");
while ($row = $stmt->fetch()) {
    $hours = $row["minuten"] + $hours;
}
?>
<body>

<?php
include "templates/header.html";
?>

<!-- Content -->
<div class="metaportal_fn_content">

    <!-- Home Section #2 -->
    <section id="home2">

        <!-- BG -->
        <div class="video_bg">
            <video autoplay loop muted src="assets/img/bg.mp4" alt="Video BG"></video>
        </div>
        <!-- !BG -->

        <div class="container">

            <h3 class="fn__maintitle big" data-align="center" data-text="Team Sensivity">Team Sensivity</h3>

            <div class="fn_cs_desc">
                
            </div>

        </div>

        <!-- Card Slider -->
        <div class="frenify_cards_gallery" data-initial-width="540" data-ratio="0.925">
            <ul>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                            <img alt="michel929" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/zzzz.jpg"></div>
                            <img alt="zzzz" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/jangerlp.png"></div>
                            <img alt="jangerlp" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/Samuel.webp"></div>
                            <img alt="samuel" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                            <img alt="P1L4" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/Lorenz.webp"></div>
                            <img alt="Striker" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/paul.png"></div>
                            <img alt="Paul" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/juicy.png"></div>
                            <img alt="Juicy" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/Sam.webp"></div>
                            <img alt="Sam" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img_holder">
                        <div class="item_in">
                            <div class="o_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                            <img alt="max" src="assets/img/1x1.jpg"/>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <!-- !Card Slider -->


    </section>
    <!-- !Home Section #2 -->

    <!-- Section About #2 -->
    <section id="about">

        <div class="container small">

            <div class="fn_cs_shortabout">
                <div class="about_left">
                    <h3 class="fn__maintitle" data-text="Team Sensivity">Team Sensivity</h3>
                    <div class="fn_cs_divider">
                        <div class="divider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Wir sind eine kleine Community, bei der jeder Wilkommen ist... Hier werden sogut wie alle Spiele gezockt, aber auch mal einfach nur gequatscht, oder Filme zusammen geschaut.</p>
                        <p>Also daher du bist Herzlich Willkommen zu joinen und ein Teil unserer Community zu werden.</p>
                    </div>
                    <a class="metaportal_fn_button" href="https://discord.com/invite/eC7Jcg7Nzt"
                       target="_blank"><span>Find us On Discord</span></a>
                </div>
                <div class="about_right">
                    <div class="abs_img" data-bg-img="assets/img/Logo/logo-transparent.png" alt="Logo"></div>
                </div>
            </div>


            <div class="fn_cs_collection_info">
                <h3 class="fn__gradient_title"><?php echo $user_count; ?></h3>
                <h3 class="fn__maintitle upper" data-text="Total Members">Total Members</h3>
                
            </div>

        </div>

        <div class="fn_cs_video bg">
            <div class="hero" data-bg-img="assets/img/Logo/header.png" alt="hero BG"></div>
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=L28UZqMzVN4">
                <img alt="" class="fn__svg" src="assets/svg/play.svg" alt="play">
            </a>
        </div>

        <br><br>
        <div class="container">
            <div class="fn_cs_join">
                <div class="join_in">
                    <h3 class="fn__maintitle upper" data-text="Join Our Community">Join Our Community</h3>
                    <p>Hier ist sogut wie immer jemand Online, joine einfach und lern neue Leute kennen. Spiele gemeinsam statt mit "Randoms", wir alle kennen Sie ahhhhh!</p>
                    <div class="buttons">
                        <a class="metaportal_fn_button" href="https://discord.com/invite/eC7Jcg7Nzt"
                           target="_blank"><span>FInd us on Discord</span></a>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="fn_cs_counter_list">
                <ul>
                    <li>
                        <div class="item">
                            <h3 class="fn__gradient_title">
                                <span class="prefix"></span>
                                <span class="fn_cs_counter" data-decimals="0" data-from="0" data-speed="3000"
                                      data-to="<?php echo $user_online; ?>">0</span>
                                <span class="suffix"></span>
                            </h3>
                            <p>User Online</p>
                            <div class="divider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <h3 class="fn__gradient_title">
                                <span class="prefix"></span>
                                <span class="fn_cs_counter" data-decimals="0" data-from="0" data-speed="3000"
                                      data-to="<?php echo $hours; ?>">0</span>
                                <span class="suffix"></span>
                            </h3>
                            <p>Online Time</p>
                            <div class="divider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <h3 class="fn__gradient_title">
                                <span class="prefix"></span>
                                <span class="fn_cs_counter" data-decimals="0" data-from="0" data-speed="3000"
                                      data-to="<?php echo $user_count; ?>">0</span>
                                <span class="suffix"></span>
                            </h3>
                            <p>Total Users</p>
                            <div class="divider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <h3 class="fn__gradient_title">
                                <span class="prefix"></span>
                                <span class="fn_cs_counter" data-decimals="0" data-from="0" data-speed="3000"
                                      data-to="0">0</span>
                                <span class="suffix"></span>
                            </h3>
                            <p>???</p>
                            <div class="divider"></div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>


    </section>
    <!-- !Section About #2 -->


    <!-- Section Divider -->
    <div class="fn_cs_section_divider">
        <div class="divider">
            <span class="short"></span>
            <span class="long"></span>
            <span class="short"></span>
        </div>
    </div>
    <!-- !Section Divider -->

    <!-- Collection Section -->
    <section id="collection">
        <div class="container">

            <h3 class="fn__maintitle big" data-align="center" data-text="Our Streamers">Our Streamers</h3>

            <div class="fn_cs_collection modern">
                <div class="collection_top">
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                <img alt="Placeholder" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/P1L4.webp">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                <img alt="P1L4" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/P1L4.webp">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                                <img alt="michel929" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/michel929.png">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                                <img alt="max" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/max.webp">
                    </div>
                </div>
                <div class="collection_bottom">
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                                <img alt="michel929" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/michel929.png">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                                <img alt="max" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/max.webp">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                                <img alt="Placeholder" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/michel929.png">
                    </div>
                    <div class="item">
                        <div class="item_in">
                            <div class="img">
                                <div class="abs_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                <img alt="P1L4" src="assets/img/1x1.jpg">
                            </div>
                        </div>
                        <input type="hidden" value="assets/img/TeamLeitung/P1L4.webp">
                    </div>
                </div>
            </div>

            <div class="fn_cs_desc">
                <p></p>
                <a class="metaportal_fn_button"
                   href="https://www.twitch.tv/teamsensivity"><span>Find us on Twitch</span></a>
            </div>

        </div>
    </section>
    <!-- !Collection Section -->


    <!-- Section Divider -->
    <div class="fn_cs_section_divider">
        <div class="divider">
            <span class="short"></span>
            <span class="long"></span>
            <span class="short"></span>
        </div>
    </div>
    <!-- !Section Divider -->

    <!-- Dashboard Section -->
    <br><br><br>
    <section id="dashboard">

        <!-- About Shortcode -->
        <div class="fn_cs_about">
            <div class="left_part">
                <div class="img">
                    <div class="img_in" data-bg-img="assets/img/Logo/logo-transparent.png"><img alt="Logo" src="assets/img/1x1.jpg">
                    </div>
                </div>
                <div class="bg_overlay">
                    <div class="bg_color"></div>
                    <div class="bg_image" data-bg-img="assets/img/mockup/ipad-1.png" alt="IPad"></div>
                </div>
            </div>
            <div class="right_part">
                <div class="right_in">
                    <h3 class="fn__maintitle" data-text="Team Sensivity Dashboard">Team Sensivity Dashboard</h3>
                    <div class="fn_cs_divider">
                        <div class="divider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="desc">
                        <p>COMING SOON</p>
                    </div>
                    <a class="metaportal_fn_button" href="https://dashboard.sensivity.team"
                       target="_blank"><span>Zum Dashboard</span></a>
                </div>
            </div>
        </div>
        <!-- !About Shortcode -->


        <div class="container">
            <!-- Mint Shortcode -->
            <div class="fn_cs_mint">
                <div class="left_part">
                    <h3 class="fn__maintitle" data-text="How to USe">How to Use</h3>
                    <div class="fn_cs_divider">
                        <div class="divider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="desc">
                        <p>COMING SOON</p>
                    </div>
                    <a class="metaportal_fn_button" href="/"><span>Zum Dashboard</span></a>
                </div>

                <div class="right_part">

                    <!-- Steps Shortcode -->
                    <div class="fn_cs_steps">
                        <ul>
                            <li>
                                <div class="item">
                                    <div class="item_in">
                                        <h3 class="fn__gradient_title">01</h3>
                                        <p>Join unserem DiscordServer</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item_in">
                                        <h3 class="fn__gradient_title">02</h3>
                                        <p>Akzeptiere die Bestimmungen</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item_in">
                                        <h3 class="fn__gradient_title">03</h3>
                                        <p>Benutze <b>/login</b> um dich Anzumelden</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item_in">
                                        <h3 class="fn__gradient_title">04</h3>
                                        <p>Nutze nun alle Vorteile</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- !Steps Shortcode -->

                    <!-- Video Shortcode -->
                    <div class="fn_cs_video">
                        <img alt="" src="assets/img/mockup/ipad-2.png" alt="Ipad">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=zlMM_2nriG8">
                            <img alt="" class="fn__svg" src="assets/svg/play.svg" alt="play">
                        </a>
                    </div>
                    <!-- /Video Shortcode -->

                </div>

            </div>
            <!-- !Mint Shortcode -->
            <br><br><br>
            <div class="fn_cs_faq">

                <div class="faq_col">
                    <h3 class="fn__maintitle" data-text="FAQ">FAQ</h3>
                    <div class="fn_cs_divider">
                        <div class="divider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Hier findest die meist gestellten Fragen zum Team Sensivity Dashboard.</p>
                        <p>Und zudem alle wichtigen Fragen zum TurnierSystem.</p>
                    </div>
                </div>

                <div class="faq_col">

                    <div class="fn_cs_accordion">
                        <div class="acc_item active">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="Was kann das Dashboard?">Was kann das
                                    Dashboard?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>Hier findest du alle Games an einem Ort. All deine Gamestats, Achievements, Level
                                    findest du dort. Hier kannst du um Serverrechte zocken, ...</p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="Ein TurnierSystem?">Ein
                                    TurnierSystem?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                    purest form, RENGA is art and the art of storytelling.</p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="Welche Games sind integriert?">Welche Games
                                    sind integriert?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>Von League of Legends, Valorant, TFT, Dead by Daylight bis Minecraft ist alles
                                    dabei. Eine genaue Liste findest du <a href="/games.php">hier...</a></p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle"
                                    data-text="Wie kann ich einen TeamSensivityAccount erstellen?">Wie kann ich
                                    einen TeamSensivityAccount erstellen?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>Join einfach unserem <a
                                            href="https://discord.com/invite/eC7Jcg7Nzt">DiscordServer</a>
                                    und sobald du die
                                    Bedingungen akzeptiert hast wird
                                    automatisch ein Account angelegt.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="faq_col">

                    <div class="fn_cs_accordion">
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="Ein
                                        TurnierSystem?">Ein
                                    TurnierSystem?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                    purest form, RENGA is art and the art of storytelling.</p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="How many Legends is issued?">How many Legends
                                    is issued?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                    purest form, RENGA is art and the art of storytelling.</p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="When is the sale date?">When is the sale
                                    date?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                    purest form, RENGA is art and the art of storytelling.</p>
                            </div>
                        </div>
                        <div class="acc_item">
                            <div class="acc_header">
                                <h3 class="fn__maintitle" data-text="What about blockchain?">What about
                                    blockchain?</h3>
                                <span class="icon"><span></span></span>
                            </div>
                            <div class="acc_content">
                                <p>Alle Beiträge findest du auch auf Discord in unserem <b>Announcements Channel</b>.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <br><br><br>
    <!-- !About Section -->


    <!-- Section Divider -->
    <div class="fn_cs_section_divider">
        <div class="divider">
            <span class="short"></span>
            <span class="long"></span>
            <span class="short"></span>
        </div>
    </div>
    <!-- !Section Divider -->


    <!-- Section News -->
    <section id="news">
        <div class="container">

            <h3 class="fn__maintitle big" data-align="center" data-text="Latest Articles">Latest Articles</h3>

            <!-- News Shotcode -->
            <div class="fn_cs_news">
                <div class="news_part">
                    <div class="left_items">
                        <div class="blog__item">
                            <div class="counter">
                                <span class="cc"><span>01</span></span>
                            </div>
                            <?php
                            $stmt = $pdo->query("SELECT * FROM news ORDER BY datum DESC LIMIT 1");
                            while ($row = $stmt->fetch()) {
                                $text = substr($row["text"], 0, 120);
                                $datum = $row["datum"];
                                $titel = $row["titel"];
                                $tags = $row["tags"];
                                $blogid = $row["id"];

                                $arr = getTagArray($tags);
                                $tags = "s";
                                foreach ($arr as $argument) {
                                    if ($tags != "s") {
                                        $tags = $tags . ", " . getTagName($argument);
                                    } else {
                                        $tags = getTagName($argument);
                                    }
                                }
                                $banner = $row["banner"];
                            }
                            ?>
                            <div class="meta">
                                <p><?php echo $datum; ?> / <?php echo $tags; ?> / 4 Comments</p>
                            </div>
                            <div class="title">
                                <h3><a href="blog-single.php?id=<?php echo $blogid; ?>"><?php echo $titel; ?></a>
                                </h3>
                            </div>
                            <div class="image">
                                <a href="blog-single.php?id=<?php echo $blogid; ?>">
                                    <img alt="" src="<?php echo $banner; ?>" alt="banner">
                                </a>
                            </div>
                            <div class="read_more">
                                <a href="blog-single.php?id=<?php echo $blogid; ?>"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $stmt = $pdo->query("SELECT * FROM news ORDER BY datum DESC LIMIT 2");
                    while ($row = $stmt->fetch()) {
                        $text = substr($row["text"], 0, 120);
                        $datum = $row["datum"];
                        $titel = $row["titel"];
                        $tags = $row["tags"];
                        $blogid = $row["id"];

                        $arr = getTagArray($tags);
                        $tags = "s";
                        foreach ($arr as $argument) {
                            if ($tags != "s") {
                                $tags = $tags . ", " . getTagName($argument);
                            } else {
                                $tags = getTagName($argument);
                            }
                        }

                        $banner = $row["banner"];
                    }
                    ?>
                    <div class="right_items">
                        <div class="blog__item">
                            <div class="counter">
                                <span class="cc"><span>02</span></span>
                            </div>
                            <div class="meta">
                                <p><?php echo $datum; ?> / <?php echo $tags; ?> / 4 Comments</p>
                            </div>
                            <div class="title">
                                <h3><a href="blog-single.php?id=<?php echo $blogid; ?>"><?php echo $titel; ?></a>
                                </h3>
                            </div>
                            <div class="read_more">
                                <a href="blog-single.php?id=<?php echo $blogid; ?>"><span>Read More</span></a>
                            </div>
                        </div>
                        <?php
                        $stmt = $pdo->query("SELECT * FROM news ORDER BY datum DESC LIMIT 3");
                        while ($row = $stmt->fetch()) {
                            $text = substr($row["text"], 0, 120);
                            $datum = $row["datum"];
                            $titel = $row["titel"];
                            $tags = $row["tags"];
                            $blogid = $row["id"];

                            $arr = getTagArray($tags);
                            $tags = "s";
                            foreach ($arr as $argument) {
                                if ($tags != "s") {
                                    $tags = $tags . ", " . getTagName($argument);
                                } else {
                                    $tags = getTagName($argument);
                                }
                            }

                            $banner = $row["banner"];
                        }
                        ?>
                        <div class="blog__item">
                            <div class="counter">
                                <span class="cc"><span>03</span></span>
                            </div>
                            <div class="meta">
                                <p><?php echo $datum; ?> / <?php echo $tags; ?> / 4 Comments</p>
                            </div>
                            <div class="title">
                                <h3><a href="blog-single.php?id=<?php echo $blogid; ?>"><?php echo $titel; ?></a>
                                </h3>
                            </div>
                            <div class="read_more">
                                <a href="blog-single.php?id=<?php echo $blogid; ?>"><span>Read More</span></a>
                            </div>
                        </div>
                        <?php
                        $stmt = $pdo->query("SELECT * FROM news ORDER BY datum DESC LIMIT 4");
                        while ($row = $stmt->fetch()) {
                            $text = substr($row["text"], 0, 120);
                            $datum = $row["datum"];
                            $titel = $row["titel"];
                            $tags = $row["tags"];
                            $blogid = $row["id"];

                            $arr = getTagArray($tags);
                            $tags = "s";
                            foreach ($arr as $argument) {
                                if ($tags != "s") {
                                    $tags = $tags . ", " . getTagName($argument);
                                } else {
                                    $tags = getTagName($argument);
                                }
                            }

                            $banner = $row["banner"];
                        }
                        ?>
                        <div class="blog__item">
                            <div class="counter">
                                <span class="cc"><span>04</span></span>
                            </div>
                            <div class="meta">
                                <p><?php echo $datum; ?> / <?php echo $tags; ?> / 4 Comments</p>
                            </div>
                            <div class="title">
                                <h3><a href="blog-single.php?id=<?php echo $blogid; ?>"><?php echo $titel; ?></a>
                                </h3>
                            </div>
                            <div class="read_more">
                                <a href="blog-single.php?id=<?php echo $blogid; ?>"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom_part">
                    <div class="left_bot">
                        <a class="metaportal_fn_button full" href="blog.php"><span>Read All Articles</span></a>
                    </div>
                    <div class="right_bot">
                        <p>Alle Beiträge findest du auch auf Discord in unserem <b>Announcements Channel</b>.</p>
                    </div>
                </div>
            </div>
            <!-- !News Shotcode -->

        </div>
    </section>
    <!-- !Section News -->

    <?php
    include "templates/footer.html";
    ?>
</body>
</html>
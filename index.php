<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="de"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="de"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="de"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="de"> <!--<![endif]-->

<head>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

    <meta content="TeamSensivity" name="description">
    <meta content="michel929" name="author">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <title>Team Sensivity</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- !Google Fonts -->

    <!-- Styles -->
    <link href="assets/css/plugins.css?ver=6.0" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css?ver=6.0" rel="stylesheet" type="text/css"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/modernizr.custom.js?ver=6.0"></script> <![endif]-->
    <!-- !Styles -->

    <link rel="icon" type="image/png" sizes="32x32"
          href="https://sensivity.team/assets/img/Logo/logo-transparent.png"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="https://sensivity.team/assets/img/Logo/logo-transparent.png"/>
</head>

<?php
require_once("inc/config.inc.php");

$stmt = $pdo->query("SELECT * FROM bot");
while ($row = $stmt->fetch()) {
    $user_count = $row["user_count"];
    $user_online = $row["user_online"];
}
?>
<body>

<!-- Preloader -->
<div class="metaportal_fn_preloader">
    <div class="loading-container">
        <div class="loading">
            <div class="l1">
                <div></div>
            </div>
            <div class="l2">
                <div></div>
            </div>
            <div class="l3">
                <div></div>
            </div>
            <div class="l4">
                <div></div>
            </div>
        </div>
    </div>
</div>
<!-- !Preloader -->

<!-- Left Navigation -->
<div class="metaportal_fn_leftnav_closer ready"></div>
<div class="metaportal_fn_leftnav ready">
    <a class="fn__closer" href="#"><span></span></a>
    <div class="navbox">
        <div class="list_holder">
            <ul class="metaportal_fn_items">
                <li>
                    <div class="item">
                        <a href="https://www.twitch.tv/teamsensivity" target="_blank"></a>
                        <span class="icon">
							<img alt="" src="assets/svg/twitch.svg" width="30px">
						</span>
                        <span class="text">Twitch</span>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="https://discord.com/" target="_blank"></a>
                        <span class="icon">
							<img alt="" src="assets/img/market/discord.png">
						</span>
                        <span class="text">Discord</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav_holder">

            <!-- For JS -->
            <span class="icon">
				<img alt="" class="fn__svg" src="assets/svg/down.svg">
			</span>
            <!-- For JS -->

            <ul>
                <li><a><span class="creative_link">Home</span></a></li>
                <li><a href="collection.html"><span class="creative_link">Dashboard</span></a></li>
                <li><a href="https://turnier.sensivity.team"><span class="creative_link">TurnierSystem</span></a></li>
                <li><a href="https://ticketsystem.sensivity.team"><span class="creative_link">TicketSystem</span></a>
                </li>
            </ul>
        </div>
        <div class="info_holder">
            <div class="copyright">
                <p>Copyright 2022 - Developed by <a href="https://michel929.de" target="_blank">michel929</a></p>
            </div>
            <div class="social_icons">
                <ul>
                    <li><a href="#"><img alt="" class="fn__svg" src="assets/svg/social/twitter-1.svg"></a></li>
                    <li><a href="#"><img alt="" class="fn__svg" src="assets/svg/social/facebook-1.svg"></a></li>
                    <li><a href="#"><img alt="" class="fn__svg" src="assets/svg/social/instagram-1.svg"></a></li>
                    <li><a href="#"><img alt="" class="fn__svg" src="assets/svg/social/pinterest-1.svg"></a></li>
                    <li><a href="#"><img alt="" class="fn__svg" src="assets/svg/social/behance-1.svg"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- !Left Navigation -->


<!-- Searchbox Popup -->
<div class="metaportal_fn_search_closer"></div>
<div class="metaportal_fn_searchbox">
    <div class="container small">
        <div class="searchbox">
            <input placeholder="Search here..." type="text">
            <a href="#">
                <img alt="" class="fn__svg" src="assets/svg/loupe.svg">
            </a>
        </div>
    </div>
</div>
<!-- !Searchbox Popup -->

<!-- Wallet Popup -->
<div class="metaportal_fn_wallet_closer ready"></div>
<div class="metaportal_fn_walletbox ready">
    <a class="fn__closer" href="#"><span></span></a>
    <div class="walletbox">

        <div class="title_holder">
            <h3>Our Server</h3>
            <p>Wähle deine einen der Server. Wähle aber wähle weise!</p>
        </div>

        <div class="list_holder">
            <ul class="metaportal_fn_items">
                <li>
                    <div class="item">
                        <a href="https://discord.com/invite/eC7Jcg7Nzt"></a>
                        <span class="icon">
							<img alt="discord" src="assets/img/market/discord.png">
						</span>
                        <span class="text">Discord</span>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <a href="#"></a>
                        <span class="icon">
							<img alt="" src="assets/svg/minecraft.svg" width="30px">
						</span>
                        <span class="text">Minecraft</span>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- !Wallet Popup -->

<!-- Main -->
<div class="metaportal_fn_main">

    <!-- Mobile Navigation -->
    <div class="metaportal_fn_mobnav">
        <div class="mob_top">
            <div class="social_trigger">
                <div class="trigger">
                    <span></span>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank">Fb.</a></li>
                        <li><a href="https://www.twitter.com/" target="_blank">Tw.</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank">In.</a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank">Ln.</a></li>
                    </ul>
                </div>
            </div>
            <div class="wallet">
                <a class="metaportal_fn_button wallet_opener" href="#"><span>Wallet</span></a>
            </div>
        </div>
        <div class="mob_mid">
            <div class="logo">
                <a href="index.html"><img alt="" src="assets/img/logo.png"></a>
            </div>
            <div class="trigger">
                <span></span>
            </div>
        </div>
        <div class="mob_bot">
            <ul>
                <li><a class="creative_link" href="#home">Home</a></li>
                <li><a class="creative_link" href="#about">About</a></li>
                <li><a class="creative_link" href="#collection">Collection</a></li>
                <li><a class="creative_link" href="#news">Blog</a></li>
                <li><a class="creative_link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- !Mobile Navigation -->

    <!-- Header -->
    <header id="header">
        <div class="header">
            <div class="header_in">

                <div class="trigger_logo">
                    <div class="trigger">
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="index.html"><img alt="" src="assets/img/Logo/logo-transparent.png" width="50px"></a>
                    </div>
                </div>

                <div class="nav">
                    <ul>
                        <li><a class="creative_link" href="#home">Home</a></li>
                        <li><a class="creative_link" href="#about">About</a></li>
                        <li><a class="creative_link" href="#collection">Collection</a></li>
                        <li><a class="creative_link" href="#news">Blog</a></li>
                        <li><a class="creative_link" href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="wallet">
                    <a class="metaportal_fn_button wallet_opener" href="#"><span>Join Our Server</span></a>
                </div>

            </div>
        </div>
    </header>
    <!-- !Header -->

    <!-- Content -->
    <div class="metaportal_fn_content">

        <!-- Home Section #2 -->
        <section id="home2">

            <!-- BG -->
            <div class="video_bg">
                <video autoplay loop muted src="assets/img/bg.mp4"></video>
            </div>
            <!-- !BG -->

            <div class="container">

                <h3 class="fn__maintitle big" data-align="center" data-text="Team Sensivity">Team Sensivity</h3>

                <div class="fn_cs_desc">
                    <p>Meta Legends represent a collection of 17,000 legends categorized by level of rarity and
                        generated with hundreds of elements. The Legends are stored as ERC-721 tokens on the Ethereum
                        blockchain and hosted on IPFS.</p>
                </div>

            </div>

            <!-- Card Slider -->
            <div class="frenify_cards_gallery" data-initial-width="540" data-ratio="0.925">
                <ul>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/zzzz.jpg"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/jangerlp.png"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/Samuel.webp"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/Lorenz.webp"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/drops/6.jpg"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/drops/7.jpg"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/drops/8.jpg"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img_holder">
                            <div class="item_in">
                                <div class="o_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                                <img alt="" src="assets/img/1x1.jpg"/>
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
                            <p>As the first hero of the Meta Legends, collection has over 9,999 unique skins drawn from
                                the different missions and challenges he faced throughout his life.</p>
                            <p>The artwork has been hand-drawned by Robert Green in the traditional anime style and
                                composited by Layla Efiyo.</p>
                        </div>
                        <a class="metaportal_fn_button" href="https://discord.com/invite/eC7Jcg7Nzt"
                           target="_blank"><span>Find us On Discord</span></a>
                    </div>
                    <div class="about_right">
                        <div class="abs_img" data-bg-img="assets/img/Logo/logo-transparent.png"></div>
                    </div>
                </div>


                <div class="fn_cs_collection_info">
                    <h3 class="fn__gradient_title"><?php echo $user_count; ?></h3>
                    <h3 class="fn__maintitle upper" data-text="Total Members">Total Members</h3>
                    <p>There are many variations of passages of lorem ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.</p>
                </div>

            </div>

            <div class="fn_cs_video bg">
                <div class="hero" data-bg-img="assets/img/Logo/header.png"></div>
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=zlMM_2nriG8">
                    <img alt="" class="fn__svg" src="assets/svg/play.svg">
                </a>
            </div>

            <br><br>
            <div class="container">
                <div class="fn_cs_join">
                    <div class="join_in">
                        <h3 class="fn__maintitle upper" data-text="Join Our Community">Join Our Community</h3>
                        <p>There are many variations of passages of lorem ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>
                        <div class="buttons">
                            <a class="metaportal_fn_button" href="https://opensea.io/" target="_blank"><span>Buy On Opensea</span></a>
                            <a class="metaportal_fn_button" href="#" target="_blank"><span>WhiteList Now</span></a>
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
                                    <span class="fn_cs_counter" data-decimals="1" data-from="0" data-speed="3000"
                                          data-to="3.9">0</span>
                                    <span class="suffix">k+</span>
                                </h3>
                                <p>Online Hours</p>
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
                                          data-to="144">0</span>
                                    <span class="suffix">k+</span>
                                </h3>
                                <p>Volume Traded (ETH)</p>
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

                <h3 class="fn__maintitle big" data-align="center" data-text="Our Streamer">Our Streamer</h3>

                <div class="fn_cs_collection modern">
                    <div class="collection_top">
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/collection/1.jpg"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="img/collection/1.jpg">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/TeamLeitung/P1L4.webp">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/TeamLeitung/michel929.png"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/TeamLeitung/michel929.png">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
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
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/TeamLeitung/michel929.png">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/TeamLeitung/max.webp"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/TeamLeitung/max.webp">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/collection/7.jpg"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/collection/7.jpg">
                        </div>
                        <div class="item">
                            <div class="item_in">
                                <div class="img">
                                    <div class="abs_img" data-bg-img="assets/img/TeamLeitung/P1L4.webp"></div>
                                    <img alt="" src="assets/img/1x1.jpg">
                                </div>
                            </div>
                            <input type="hidden" value="assets/img/TeamLeitung/P1L4.webp">
                        </div>
                    </div>
                </div>

                <div class="fn_cs_desc">
                    <p>Meta Legends represent a collection of 17,000 legends categorized by level of rarity and
                        generated with hundreds of elements. The Legends are stored as ERC-721 tokens on the Ethereum
                        blockchain and hosted on IPFS.</p>
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
                        <div class="img_in" data-bg-img="assets/img/Logo/logo-transparent.png"><img alt=""
                                                                                                    src="assets/img/1x1.jpg">
                        </div>
                    </div>
                    <div class="bg_overlay">
                        <div class="bg_color"></div>
                        <div class="bg_image" data-bg-img="assets/img/mockup/ipad-1.png"></div>
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
                            <p>As the first hero of the Meta Legends, collection has over 9,999 unique skins drawn from
                                the different missions and challenges he faced throughout his life.</p>
                            <p>The artwork has been hand-drawned by Robert Green in the traditional anime style and
                                composited by Layla Efiyo.</p>
                            <p>Curabitur pharetra velit eget dignissim varius. In vulputate elit at tortor pellentesque,
                                non pulvinar neque consequat. Aenean tristique odio in libero tincidunt maximus. Nulla
                                pharetra viverra dolor ut blandit. Cras finibus vel tortor eget lacinia. Pellentesque
                                interdum elit non lacinia faucibus. Morbi nec felis auctor, tincidunt lacus sit amet,
                                iaculis ipsum. Phasellus tempus sit amet justo et feugiat. Duis blandit semper lorem,
                                egestas euismod ligula pharetra ac. Sed porta lorem eget neque bibendum, eget euismod
                                justo mollis.</p>
                            <p>Donec tristique porttitor sem, eget fermentum elit varius nec. Donec ut orci ipsum. Morbi
                                efficitur felis eget dapibus fermentum. Phasellus sed tellus volutpat, hendrerit leo
                                non, sollicitudin neque. Etiam ac lacus quam. Vivamus suscipit nisl tellus, at congue
                                odio commodo at. Cras ante enim, sodales at pretium et, tempus at libero.</p>
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
                        <h3 class="fn__maintitle" data-text="How to Mint">How to Mint</h3>
                        <div class="fn_cs_divider">
                            <div class="divider">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="desc">
                            <p>As the first hero of the Meta Legends, collection has over 9,999 unique skins drawn from
                                the different missions and challenges he faced throughout his life.</p>
                            <p>The artwork has been hand-drawned by Robert Green in the traditional anime style and
                                composited by Layla Efiyo.</p>
                            <p>Curabitur pharetra velit eget dignissim varius. In vulputate elit at tortor pellentesque,
                                non pulvinar neque consequat. Aenean tristique odio in libero tincidunt maximus. Nulla
                                pharetra viverra dolor ut blandit. Cras finibus vel tortor eget lacinia. Pellentesque
                                interdum elit non lacinia faucibus. Morbi nec felis auctor, tincidunt lacus sit amet,
                                iaculis ipsum. Phasellus tempus sit amet justo et feugiat. Duis blandit semper lorem,
                                egestas euismod ligula pharetra ac. Sed porta lorem eget neque bibendum, eget euismod
                                justo mollis.</p>
                            <p>Donec tristique porttitor sem, eget fermentum elit varius nec. Donec ut orci ipsum. Morbi
                                efficitur felis eget dapibus fermentum. Phasellus sed tellus volutpat, hendrerit leo
                                non, sollicitudin neque. Etiam ac lacus quam. Vivamus suscipit nisl tellus, at congue
                                odio commodo at. Cras ante enim, sodales at pretium et, tempus at libero.</p>
                        </div>
                        <a class="metaportal_fn_button" href="nft-single.html"><span>How to Mint</span></a>
                    </div>

                    <div class="right_part">

                        <!-- Steps Shortcode -->
                        <div class="fn_cs_steps">
                            <ul>
                                <li>
                                    <div class="item">
                                        <div class="item_in">
                                            <h3 class="fn__gradient_title">01</h3>
                                            <p>Connect your Wallet</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="item_in">
                                            <h3 class="fn__gradient_title">02</h3>
                                            <p>Select Your Quantity</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="item_in">
                                            <h3 class="fn__gradient_title">03</h3>
                                            <p>Confirm The Transaction</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="item_in">
                                            <h3 class="fn__gradient_title">04</h3>
                                            <p>Receive Your NFT’s</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- !Steps Shortcode -->

                        <!-- Video Shortcode -->
                        <div class="fn_cs_video">
                            <img alt="" src="assets/img/mockup/ipad-2.png">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=zlMM_2nriG8">
                                <img alt="" class="fn__svg" src="assets/svg/play.svg">
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
                            <p>Pellentesque eu ex iaculis, tempus ex eu, consectetur lectus. Aenean nec iaculis est, a
                                mattis turpis. Morbi posuere lorem id risus luctus, luctus tristique enim luctus.
                                Vivamus ut tincidunt erat.</p>
                            <p>Nunc nec sollicitudin elit, ut pretium dui. Nulla facilisis pulvinar odio ac suscipit.
                                Quisque pretium, est id facilisis luctus, magna lorem posuere velit.</p>
                        </div>
                    </div>

                    <div class="faq_col">

                        <div class="fn_cs_accordion">
                            <div class="acc_item active">
                                <div class="acc_header">
                                    <h3 class="fn__maintitle" data-text="What is Meta Legends?">What is Meta
                                        Legends?</h3>
                                    <span class="icon"><span></span></span>
                                </div>
                                <div class="acc_content">
                                    <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                        purest form, RENGA is art and the art of storytelling.</p>
                                </div>
                            </div>
                            <div class="acc_item">
                                <div class="acc_header">
                                    <h3 class="fn__maintitle" data-text="What is The Art of Seasons?">What is The Art of
                                        Seasons?</h3>
                                    <span class="icon"><span></span></span>
                                </div>
                                <div class="acc_content">
                                    <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                        purest form, RENGA is art and the art of storytelling.</p>
                                </div>
                            </div>
                            <div class="acc_item">
                                <div class="acc_header">
                                    <h3 class="fn__maintitle" data-text="How do I stay updated and safe?">How do I stay
                                        updated and safe?</h3>
                                    <span class="icon"><span></span></span>
                                </div>
                                <div class="acc_content">
                                    <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                        purest form, RENGA is art and the art of storytelling.</p>
                                </div>
                            </div>
                            <div class="acc_item">
                                <div class="acc_header">
                                    <h3 class="fn__maintitle" data-text="What is Meta Legends?">What is Meta
                                        Legends?</h3>
                                    <span class="icon"><span></span></span>
                                </div>
                                <div class="acc_content">
                                    <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                        purest form, RENGA is art and the art of storytelling.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="faq_col">

                        <div class="fn_cs_accordion">
                            <div class="acc_item">
                                <div class="acc_header">
                                    <h3 class="fn__maintitle" data-text="How can I mint my character?">How can I mint my
                                        character?</h3>
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
                                    <p>A handcrafted collection of 10,000 characters developed by artist Frenify. In its
                                        purest form, RENGA is art and the art of storytelling.</p>
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
                                <div class="meta">
                                    <p>August 09, 2022 / MetaVerse / 4 Comments</p>
                                </div>
                                <div class="title">
                                    <h3><a href="blog-single.html">Reasons Why People Use Discord</a></h3>
                                </div>
                                <div class="image">
                                    <a href="blog-single.html">
                                        <img alt="" src="assets/img/blog/1.jpg">
                                    </a>
                                </div>
                                <div class="read_more">
                                    <a href="blog-single.html"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="right_items">
                            <div class="blog__item">
                                <div class="counter">
                                    <span class="cc"><span>02</span></span>
                                </div>
                                <div class="meta">
                                    <p>August 09, 2022 / MetaVerse / 4 Comments</p>
                                </div>
                                <div class="title">
                                    <h3><a href="blog-single.html">Trial-By-Combat: The Death Cup</a></h3>
                                </div>
                                <div class="read_more">
                                    <a href="blog-single.html"><span>Read More</span></a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="counter">
                                    <span class="cc"><span>03</span></span>
                                </div>
                                <div class="meta">
                                    <p>August 09, 2022 / NFT / 4 Comments</p>
                                </div>
                                <div class="title">
                                    <h3><a href="blog-single.html">Graffiti Racer Research Center #10</a></h3>
                                </div>
                                <div class="read_more">
                                    <a href="blog-single.html"><span>Read More</span></a>
                                </div>
                            </div>
                            <div class="blog__item">
                                <div class="counter">
                                    <span class="cc"><span>04</span></span>
                                </div>
                                <div class="meta">
                                    <p>August 09, 2022 / MetaVerse / 4 Comments</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-single.html"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom_part">
                        <div class="left_bot">
                            <a class="metaportal_fn_button full" href="blog.html"><span>Read All Articles</span></a>
                        </div>
                        <div class="right_bot">
                            <p>We’re a team of creatives who are excited about unique ideas and create consectetur
                                adipiscing elit. Etiam vitae purus a lectus semper.</p>
                        </div>
                    </div>
                </div>
                <!-- !News Shotcode -->

            </div>
        </section>
        <!-- !Section News -->

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="footer">
                    <div class="left_part">
                        <p>Copyright 2022 — Developed by <a href="https://michel929.de" target="_blank">michel929</a>
                        </p>
                    </div>
                    <div class="right_part">
                        <ul>
                            <li><a class="creative_link" href="/impressum.php">Impressum</a></li>
                            <li><a class="creative_link" href="/datenschutz.php">Datenschutzerklärung</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- !Footer -->

    </div>
    <!-- !Content -->


    <!-- Social -->
    <div id="social">
        <div class="social">
            <h4 class="title">Follow Us:</h4>
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank">Fb.</a></li>
                <li><a href="https://www.twitter.com/" target="_blank">Tw.</a></li>
                <li><a href="https://www.instagram.com/" target="_blank">In.</a></li>
                <li><a href="https://www.linkedin.com/" target="_blank">Ln.</a></li>
            </ul>
        </div>
    </div>
    <!-- !Social -->


    <!-- Totop -->
    <a class="metaportal_fn_totop" href="#">
		<span class="totop_inner">
			<span class="icon">
				<img alt="" class="fn__svg" src="assets/svg/down.svg">
			</span>
			<span class="text">Scroll To Top</span>
		</span>
    </a>
    <!-- /Totop -->

    <!-- Search Button -->
    <a class="metaportal_fn_search" href="#">
		<span class="icon">
			<img alt="" class="fn__svg" src="assets/svg/loupe.svg">
		</span>
    </a>
    <!-- !Search Button -->


</div>
<!-- !Main -->

<!-- Scripts -->
<script src="assets/js/jquery.js?ver=6.0" type="text/javascript"></script>
<script src="assets/js/plugins.js?ver=6.0" type="text/javascript"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="assets/js/ie8.js?ver=6.0"></script> <![endif]-->
<script src="assets/js/init.js?ver=6.0" type="text/javascript"></script>
<!-- !Scripts -->

</body>
</html>
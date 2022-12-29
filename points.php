<?php
include "templates/head.html";

require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
?>
<body>

<?php
include "templates/header.html";
?>
<!-- Content -->
<div class="metaportal_fn_content">

    <!-- Home Section -->
    <section id="home">
        <div class="container">

            <h3 class="fn__maintitle big" data-text="Most Points" data-align="center">Most Points</h3>

            <?php
            $stmt = $pdo->query("SELECT * FROM users ORDER BY points ASC LIMIT 7;");
            $arr = array();
            while ($row = $stmt->fetch()) {
                $arr[] = $row["discord_pb"];
            }
            ?>
            <!-- Slider -->
            <div class="fn_cs_slider" data-responsive="on">
                <div class="slider_top">
                    <img src="/assets/img/1x1.jpg" alt="">
                    <ul>
                        <li class="prev" data-index="1">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[6]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li class="active" data-index="2">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[0]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li class="next" data-index="3">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[1]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li class="next2" data-index="4">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[2]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li data-index="5">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[3]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li data-index="6">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[4]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                        <li class="prev2" data-index="7">
                            <div class="item">
                                <img src="/assets/img/1x1.jpg" alt="">
                                <div class="item_in">
                                    <div class="img" data-bg-img="<?php echo $arr[5]; ?>?size=1024"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="slider_nav">
                    <a href="#" class="prev">
                        <span class="circle"></span>
                        <span class="icon"><img src="/assets/svg/down.svg" alt="" class="fn__svg"></span>
                        <span class="circle"></span>
                    </a>
                    <a href="#" class="next">
                        <span class="circle"></span>
                        <span class="icon"><img src="/assets/svg/down.svg" alt="" class="fn__svg"></span>
                        <span class="circle"></span>
                    </a>
                </div>
            </div>
            <!-- !Slider -->

        </div>
    </section>

    <!-- !Home Section -->
    <section>
        <div class="container small">
            <div class="metaportal_fn_drops">
                <ul class="grid">
                    <?php
                    $stmt = $pdo->query("SELECT * FROM users ORDER BY points");
                    $i = 1;
                    while ($row = $stmt->fetch()) {
                        $color = "";

                        if ($i == 1) {
                            $color = 'style="border-color: #ffd700;"';
                        } else if ($i == 2) {
                            $color = 'style="border-color: #C0C0C0;"';
                        } else if ($i == 3) {
                            $color = 'style="border-color: #CD7F32;"';
                        }

                        echo '<li>
                        <div class="nft__item" ' . $color . '>
                        <br>
                            <div class="img_holder">
                                <img src="' . $row["discord_pb"] . '?size=128" alt="" style="border-radius: 12px;">
                                <a href="/' . $row["website_url"] . '" class="full_link"></a>
                            </div>
                            <div class="title_holder">
                                <h3 class="fn_title"><a href="#"><b>' . $row["discord_username"] . '</b></a></h3>
                                <h6>' . $row["points"] . ' Punkte</h6>
                            </div>
                        </div>
                    </li>';
                        $i++;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- Fun Facts -->
    <?php
    include "templates/footer.html";
    ?>
</body>
</html>
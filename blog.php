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

    <div class="metaportal_fn_pagetitle">

        <div class="container small">
            <div class="pagetitle">
                <h3 class="fn__maintitle big" data-text="Blog Articles" data-align="center">Blog Articles</h3>
                <p>
                    <a href="index.html">Home</a>
                    <span class="divider">/</span>
                    <span class="text">Blog Articles</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Section Divider -->
    <div class="fn_cs_section_divider">
        <div class="divider">
            <span class="short"></span>
            <span class="long"></span>
            <span class="short"></span>
        </div>
    </div>
    <!-- !Section Divider -->

    <div class="metaportal_fn_bloglist">
        <div class="container small">
            <div class="bloglist">
                <ul class="fn-isotope">
                    <?php
                    $stmt = $pdo->query("SELECT * FROM news ORDER BY datum DESC");
                    $i = 1;

                    while ($row = $stmt->fetch()) {
                        $tags = $row["tags"];
                        $arr = getTagArray($tags);
                        $tags = "s";
                        foreach ($arr as $argument) {
                            if ($tags != "s") {
                                $tags = $tags . ", " . getTagName($argument);
                            } else {
                                $tags = getTagName($argument);
                            }
                        }

                        echo '<li class="isotope-item">
                        <div class="blog__item">
                            <div class="counter">
                                <span class="cc"><span>' . $i . '</span></span>
                            </div>
                            <div class="meta">
                                <p>' . $row["datum"] . ' / '.$tags.' / 4 Comments</p>
                            </div>
                            <div class="title">
                                <h3><a href="/blog-single.php?id=' . $row["id"] . '">' . $row["titel"] . '</a></h3>
                            </div>
                            <div class="image">
                                <a href="blog-single.php">
                                    <img src="' . $row["banner"] . '" alt="">
                                </a>
                            </div>
                            <div class="read_more">
                                <a href="/blog-single.php?id=' . $row["id"] . '"><span>Read More</span></a>
                            </div>
                        </div>
                    </li>';
                        $i++;
                    }
                    ?>
                </ul>
            </div>

            <div class="metaportal_fn_pagination">
                <ul>
                    <li>
                        <span>1</span>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <span>...</span>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>


    <?php
    include "templates/footer.html";
    ?>
</body>
</html>
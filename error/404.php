<?php
include "../templates/head.html";
?>

<body>


<?php
 include "../templates/header.html";
?>

    <!-- Content -->
    <div class="metaportal_fn_content">

        <!-- 404 Not Found -->
        <div class="metaportal_fn_404">
            <div class="container small">
                <div class="message_holder">
                    <h3 class="fn__gradient_title">404</h3>
                    <h4 class="fn__maintitle" data-text="Page Not Found" data-align="center">Page Not Found</h4>
                    <p>Sorry, but the page you are looking for was moved, removed, renamed or might never existed...</p>
                    <div class="container-custom">
                        <form>
                            <input name="s" type="text">
                            <a href="#" class="metaportal_fn_button">
                                <img src="/assets/svg/loupe.svg" alt="" class="fn__svg">
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- !404 Not Found -->


<?php
include "../templates/footer.html";
?>

</body>
</html>
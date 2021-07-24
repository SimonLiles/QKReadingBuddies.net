<html>
    <header>
        <title>QK Reading Buddies</title>
        <link type="text/css" rel="stylesheet" href="styles/style1.css">
    </header>
    <body>
        <!--Site Header-->
        <?php
        include "scripts/draw_page_elements.php";

        draw_banner();
        ?>
        <div class="spacer"></div>
        <!--Spread for about-->
        <div class="spread" style="background-image: url('images/classroom.jpg');background-color: cadetblue;">
            <div class="spread title">
                <br>Who we are
            </div>
            <a class="spread button" href="about.html">
                Learn More
            </a>
        </div>
        <!--<div class="spacer"></div>-->
        <div class="spread" style="background-image: url('images/volunteer1.jpg');background-color: burlywood;">
            <div class="spread title" style="text-align: right;">
                <br>Volunteer with us
            </div>
            <a class="spread button" href="about.html">
                Learn More
            </a>
        </div>
        <div class="spacer"></div>
        <!--Site Footer-->
        <?php
        draw_footer();
        ?>
    </body>
</html>
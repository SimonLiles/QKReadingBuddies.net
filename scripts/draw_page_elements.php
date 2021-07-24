<?php
//Use to draw the standard page banner
function draw_banner() {
    echo '
    <div class="banner container">
        <div class="banner logo">
            QK
        </div>
        <div class="banner links ralign">
            <a class= "banner links button" href="index.php">Home</a>
            <a class= "banner links button" href="about.php">About</a>
            <a class= "banner links button" href="volunteer.php">Volunteer</a>
            <a class= "banner links button" href="contact.php">Contact Us</a>
        </div>
    </div>';
}

//use to draw the standard page footer
function draw_footer() {
    echo '
    <div class="banner container">
        <div class="banner links lcol">
            <a class= "banner links simple" href="about.php">About</a><br>
            <a class= "banner links simple" href="volunteer.php">Volunteer</a><br>
            <a class= "banner links simple" href="contact.php">Contact Us</a><br>
            <a class= "banner links simple" href="privacy.php">Privacy Statement</a><br>
        </div>
        <div class="banner copyright">
            This website was built for QK Reading Buddies by Simon Liles of <a style="color: burlywood;" href="quantknot.com">quantknot.com</a>
        </div>
    </div>';
}

//Use to draw the title section
function draw_title() {

}
?>
<html>
    <header>
        <title>Thank You</title>
        <link type="text/css" rel="stylesheet" href="styles/style1.css">
    </header>
    <body>
        <!--Site Header-->
        <?php
        include "scripts/draw_page_elements.php";

        draw_banner();
        ?>
        <div class="spacer"></div>
        <div class="title_bar">Contact Us</div>
        <!--PHP script for saving contact submission-->
        <?php
        //Connect to database
        include "scripts/db_connections.php";

        $connection = primary_db_connect();

        //Gather Data from HTML form
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $subject = $_REQUEST["subject"];
        $message = $_REQUEST["message"];

        //Insert data
        $sql_insert_query = "INSERT INTO contacts (name, email, subject, message) 
        VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";

        if($connection->query($sql_insert_query) == TRUE) {
            echo "<p>Thank you for reaching out, we will respond via email as soon as we can.</p>";
        } else {
            echo "Error: " . $sql_insert_query . "<br>" . $connection->error;
        }

        //Close the connection
        $connection->close();
        ?>
        <div class="spacer"></div>
        <!--Site Footer-->
        <?php
        draw_footer();
        ?>
    </body>
</html>
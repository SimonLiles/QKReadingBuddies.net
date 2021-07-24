<html>
    <header>
        <title>Volunteer App Submitted</title>
        <link type="text/css" rel="stylesheet" href="styles/style1.css">
    </header>
    <body>
        <!--Site Header-->
        <?php
            include "scripts/draw_page_elements.php";

            draw_banner();
        ?>
        <div class="spacer"></div>
        <!--Page Title-->
        <div class="title_bar">Your volunteer app has been submitted!</div>
        <!--PHP script for saving volunteer submission-->
        <?php
        //Connect to database
        include "scripts/db_connections.php";

        $connection = primary_db_connect();

        //Gather Data from HTML form
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $role = $_REQUEST["role"];
        $comment = $_REQUEST["comment"];

        //Insert data
        $sql_insert_query = "INSERT INTO volunteers (name, email, role, comment) 
        VALUES ('".$name."', '".$email."', '".$role."', '".$comment."')";

        if($connection->query($sql_insert_query) == TRUE) {
            echo "<p>Thank you for chosing to volunteer with us. We will be reaching out to you via email shortly.";
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
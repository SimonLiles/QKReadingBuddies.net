<?php
//Connect to contact table
function primary_db_connect() {
    //Login credentials
    include "sql_cred.php";

    $DB_NAME = "epiz_29211840_primary";

    //Connect user to database
    $connection = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DB_NAME);

    //Check connection is good
    if($connection -> connect_error) {
        die("Connection Failed: " . $connection->connect_error);
    }

    return $connection;
}
?>
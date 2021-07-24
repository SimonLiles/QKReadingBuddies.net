<html>
    <header>
        <title>Volunteer Sign Up</title>
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
        <div class="title_bar">Volunteer Sign Up</div>
        <p>
            Please fill out this form to get in touch with us. We will respond as quickly as we can. 
        </p>
        <!--JS Form Validation-->
        <script type="text/javascript">
            //Called to validate all fields
            function validateVolunteerForm() {
                if(validateName() == false || 
                    validateEmail() == false ||
                    validateRole() == false) {
                    return false;
                }
            }

            //Validate the name field
            function validateName() {
                //Get name field
                let nameValue = document.forms["volunteerForm"]["name"].value;

                let nameAlert = document.getElementById("nameAlert");

                //Perform checks
                if(nameValue == "") {
                    nameAlert.innerHTML = "Must provide a name";
                    return false;
                } else {
                    nameAlert.innerHTML = "";
                }
            }

            //Validate the email field
            function validateEmail() {
                //Get email field
                let emailValue = document.forms["volunteerForm"]["email"].value;

                let emailAlert = document.getElementById("emailAlert");

                //Check to make sure it is filled
                if(emailValue == "") {
                    emailAlert.innerHTML = "Email address must be filled out";
                    return false;
                } else {
                    emailAlert.innerHTML = "";
                }
                //Check to make sure it is valid email syntax
                //Get position of @ symbol
                let atPos = emailValue.indexOf("@");
                //Get position of last .
                let dotPos = emailValue.lastIndexOf(".");
                //Check their position and if they exist
                if (atPos <= 1 || dotPos < atPos+2 || dotPos+2 >= emailValue.length) {
                    //alert("Not a valid email address");
                    emailAlert.innerHTML = "Not a valid email address";
                    return false;
                } else {
                    emailAlert.innerHTML = "";
                }
            }

            //Validate the subject field
            function validateRole() {
                //Get Subject field
                let roleValue = document.forms["volunteerForm"]["role"].value;

                let roleAlert = document.getElementById("roleAlert");

                //Check to make sure it is filled
                if(roleValue == "") {
                    //alert("Must provide a Subject line.");
                    roleAlert.innerHTML = "Must choose a role.";
                    return false;
                } else {
                    roleAlert.innerHTML = "";
                }
            }

        </script>
        <!--Form-->
        <form name="volunteerForm" action="volunteerFormSubmit.php" onsubmit="return validateVolunteerForm()" method="POST">
            <label for="name" id="nameLabel">*Name:</label>
            <div class="alert small" id="nameAlert"></div><br>
            <input type="text" id="name" name="name" onkeypress="validateName()"><br>
            <br>
            <label for="email" id="emailLabel">*Email:</label>
            <div class="alert small" id="emailAlert"></div><br>
            <input type="text" id="email" name="email" onkeypress="validateEmail()"><br>
            <br>
            <label for="role" id="roleLabel">*Role: </label><br>
            <div class="alert small" id="roleAlert"></div><br>
            <div>
                <input type="radio" id="roleChoice1" name="role" value="Reading Buddy" onclick="validateRole()">
                <label for="roleChoice1">Reading Buddy</label><br>
                
                <input type="radio" id="roleChoice2" name="role" value="Teacher" onclick="validateRole()">
                <label for="roleChoice2">Teacher</label><br>

                <input type="radio" id="roleChoice3" name="role" value="Logistics Assistant" onclick="validateRole()">
                <label for="roleChoice3">Logistics Assistant</label><br>
            </div>
            <br>
            <label for="comment" id="commentLabel">Comment:</label><br>
            <textarea rows="10" cols="80" id="comment" name="comment" onkeypress="validateComment()"></textarea>
            <br>
            <br>
            <div class="alert small">
                * Marks required fields.
            </div>
            <br>
            <input type="submit" class="formButton" onclick="validateContactForm()">
        </form> 
        <div class="spacer"></div>
        <!--Site Footer-->
        <?php
            draw_footer();
        ?>
    </body>
</html>
<html>
    <header>
        <title>QK: Contact Us</title>
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
        <p>
            Please fill out this form to get in touch with us. We will respond as quickly as we can. 
        </p>
<!--JS Form Validation-->
        <script type="text/javascript">
            //Called to validate all fields
            function validateContactForm() {
                if(validateName() == false || 
                    validateEmail() == false ||
                    validateSubject() == false ||
                    validateMessage() == false) {
                    return false;
                }
            }

            //Validate the name field
            function validateName() {
                //Get name field
                let nameValue = document.forms["contactForm"]["name"].value;

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
                let emailValue = document.forms["contactForm"]["email"].value;

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
            function validateSubject() {
                //Get Subject field
                let subjectValue = document.forms["contactForm"]["subject"].value;

                let subjectAlert = document.getElementById("subjectAlert");

                //Check to make sure it is filled
                if(subjectValue == "") {
                    //alert("Must provide a Subject line.");
                    subjectAlert.innerHTML = "Must provide a Subject line.";
                    return false;
                } else {
                    subjectAlert.innerHTML = "";
                }
            }

            //Validate the message field
            function validateMessage() {
                //Get message field
                let messageValue = document.forms["contactForm"]["message"].value;

                let messageAlert = document.getElementById("messageAlert");

                //Check to make sure it is filled
                if(messageValue == "") {
                    //alert("Must provide a message.");
                    messageAlert.innerHTML = "Must provide a message.";
                    return false;
                } else {
                    messageAlert.innerHTML = "";
                }
            }

        </script>
        <!--Form-->
        <form name="contactForm" action="contactSubmit.php" onsubmit="return validateContactForm()" method="POST">
            <label for="name" id="nameLabel">*Name:</label>
            <div class="alert small" id="nameAlert"></div><br>
            <input type="text" id="name" name="name" onkeypress="validateName()"><br>
            <br>
            <label for="email" id="emailLabel">*Email:</label>
            <div class="alert small" id="emailAlert"></div><br>
            <input type="text" id="email" name="email" onkeypress="validateEmail()"><br>
            <br>
            <label for="subject" id="subjectLabel">*Subject:</label>
            <div class="alert small" id="subjectAlert"></div><br>
            <input type="text" id="subject" name="subject" onkeypress="validateSubject()"><br>
            <br>
            <label for="message" id="messageLabel">*Message:</label>
            <div class="alert small" id="messageAlert"></div><br>
            <!--<input type="text" id="message" name="message" class="large"><br>-->
            <textarea rows="10" cols="80" id="message" name="message" onkeypress="validateMessage()"></textarea>
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
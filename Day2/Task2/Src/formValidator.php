<?php


//var_dump($_POST);
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["email"])) {

    $email = $_POST["email"];
}
if (isset($_POST["message"])) {

    $msg = $_POST["message"];
}



function getError($msg, $email, $name)
{
    $error = array();
    if ($name) {
        if (strlen($name) >= 100) {
            $message[] = "name must be less than 100 characters";
        }
    } else {
        $error[] = "name is required";
    }

    if ($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "email is not valid";
        }
    } else {
        $error[] = "email is required";
    }

    if ($msg) {

        if (strlen($msg) >= 255) {
            $error[] = "message must be less than 255 characters";
        }
    } else {
        $error[] = "message is required";
    }
    if ($error) {
        return $error;
    } else {

        die("<center> Thanks for contacting us </br>  Name: $name </br> Email: $email </br> Message: $msg </center>");
    }
}



function get_default($field)
{
    if (isset($_POST[$field])) {
        echo $_POST[$field];
    } else {
        echo "";
    }
}

?>

<html>

<head>
    <title> contact form </title>


</head>

<body>
    <h3> Contact Form </h3>
    <h5> <?php
            if (isset($_POST["name"])) {
                $name = $_POST["name"];
            }
            else{
                $name="";
            }
            if (isset($_POST["email"])) {

                $email = $_POST["email"];
            }
            else{
                $email="";
            }
            if (isset($_POST["message"])) {

                $msg = $_POST["message"];
            }
            else{
                $msg="";
            }

            $errors = array();
            if (getError($msg, $email, $name)) {
                $errors = getError($msg, $email, $name);
                foreach ($errors as $line) {
                    echo "** $line <br/>";
                }
            }

            ?></h5>
    <div id="after_submit">

    </div>
    <form id="contact_form" action="formValidator.php" method="POST" enctype="multipart/form-data">

        <div class="row">
            <label class="required" for="name">Your name:</label><br />
            <input id="name" class="input" name="name" type="text" value="<?php get_default("name"); ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="email">Your email:</label><br />
            <input id="email" class="input" name="email" type="text" value="<?php get_default("email"); ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="message">Your message:</label><br />
            <textarea id="message" class="input" name="message" value="<?php get_default("message"); ?>" rows="7" cols="30"></textarea><br />

        </div>

        <input id="submit" name="submit" type="submit" value="Send email" />
        <input id="clear" name="clear" type="reset" value="clear form" />

    </form>
</body>

</html>
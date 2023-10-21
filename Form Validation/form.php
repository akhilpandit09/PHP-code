<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
     <script>
        function resetForm() {
            // Get a reference to the form
            var form = document.getElementById("myForm");
            
            // Loop through all form elements and reset their values
            for (var i = 0; i < form.elements.length; i++) {
                var element = form.elements[i];
                if (element.type != "submit") {
                    element.value = "";
                }
            }
        }
    </script>
</head>

<body>
    <?php
    
    //define variable and set to empty values
    $nameErr = $emailErr = $genderErr = "";
    $name = $email = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        header("Location: " . $_SERVER['PHP_SELF']);

        //for name
        if (empty($_POST['name'])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST['name']);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        //for email
        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST['email']);
            //check if email address is well-formed or not
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
      
        
    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <h2>PHP Form Validation</h2>
    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="myForm">

        Name: <input type="text" name="name" value="<?php echo $name ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit" onclick="resetForm()">
    </form>
</body>

</html>
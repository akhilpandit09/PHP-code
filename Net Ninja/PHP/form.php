<?php

if(isset($_POST['submit'])){
    // htmlspecialchars() prevent from xss ATTACK

    // check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    }else{
        $email = $_POST['email']; 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Invalid Email Formate";
        };
    }

    // check title
    if(empty($_POST['title'])){
        echo 'Title is required <br />';
    }else{
        echo htmlspecialchars($_POST['title']);  
    }

    //check ingredents
    if(empty($_POST['ingredents'])){
        echo 'An ingredents is required <br />';
    }else{
        echo htmlspecialchars($_POST['ingredents']);  
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <section class="container">
        <form action="form_method.php" method="post"></form>
    </section>
</body>
</html>
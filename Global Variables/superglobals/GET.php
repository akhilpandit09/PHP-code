<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Global Variable</title>
</head>

<body>
    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

    <?php
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
</body>

</html>
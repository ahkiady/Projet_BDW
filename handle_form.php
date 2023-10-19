<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
</head>
<body>
    <?php

$name = $_REQUEST['Name'];
$city = $_REQUEST['City'];


echo "<p>Your name is <strong>$name</strong> and you live in <strong>$city</strong>, thank you!</p>";

    ?>
</body>
</html>

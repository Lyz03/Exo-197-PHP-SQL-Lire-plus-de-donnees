<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/index.css">
    <title>Exo complet lecture SQL.</title>
</head>
<body>

<?php

    $db = new PDO('mysql:host=localhost;dbname=exo_197;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $stmt = $db->prepare("SELECT * FROM clients");

    if ($stmt->execute()) {
        foreach ($stmt->fetchAll() as $value) {
            echo '<p>';
            foreach ($value as $item) {
                echo $item . ' | ';
            }
            echo '</p>';
        }

        echo '<br><br>';
    }


    $stmt = $db->prepare("SELECT * FROM showtypes");
    if ($stmt->execute()) {
        foreach ($stmt->fetchAll() as $value) {
            echo '<p>';
            foreach ($value as $item) {
                echo $item . ' | ';
            }
            echo '</p>';
        }

        echo '<br><br>';
    }


    $stmt = $db->prepare("SELECT * FROM clients LIMIT 20");
    if ($stmt->execute()) {
        foreach ($stmt->fetchAll() as $value) {
            echo '<p>';
            foreach ($value as $item) {
                echo $item . ' | ';
            }
            echo '</p>';
        }

        echo '<br><br>';
    }


    $stmt = $db->prepare("SELECT * FROM clients WHERE card = 1");
    if ($stmt->execute()) {
        foreach ($stmt->fetchAll() as $value) {
            echo '<p>';
            foreach ($value as $item) {
                echo $item . ' | ';
            }
            echo '</p>';
        }

        echo '<br><br>';
    }

?>

</body>
</html>

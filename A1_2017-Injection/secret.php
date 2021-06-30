
<html>
<body>
<?php
$db = new SQLite3('mysqlitedb.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uuid = uniqid();
    $message = $_POST['message'];
    // The request is using the POST method
    $insert = 'INSERT INTO secrets (uuid, message) VALUES (\'' . $uuid . '\', \'' . $message . '\')';
    echo('Thanks! Your message has been sent!');
    if($db->exec($insert)) {
        echo($uuid);
    }
}

else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // The request is using the GET method
    $select = 'SELECT message FROM secrets WHERE uuid = \'' . $_GET["uuid"] . '\';';
    echo($select);
    $results = $db -> query($select);
    while ($row = $results -> fetchArray()) {
        var_dump($row['message']);
    }
}


?>

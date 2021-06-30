<?php
$db = new SQLite3('mysqlitedb.db');

// The request is using the GET method
    $select = 'SELECT message FROM secrets;';
    // echo($select);
    $results = $db -> query($select);
    while ($row = $results -> fetchArray()) {
        ?>
        <p>
        <? echo($row['message']); ?>
        </p>
        <?
    }
?>

<?php
$db = new SQLite3('mysqlitedb.db');

$options = [
    'cost' => 12,
];

$digest = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);

$sql = 'SELECT * FROM users WHERE username = \'' . $_POST["username"] . '\' AND pwhash = \'' . $digest . '\';';

echo($sql);

$results = $db->query($sql);
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>

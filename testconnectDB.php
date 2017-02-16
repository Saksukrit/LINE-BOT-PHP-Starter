
<?php
$link = mysql_connect('sql6.freemysqlhosting.net', 'sql6159246', 'DBUUiG4F5U');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>


<!-- Server: sql6.freemysqlhosting.net
Name: sql6159246
Username: sql6159246
Password: DBUUiG4F5U
Port number: 3306 -->
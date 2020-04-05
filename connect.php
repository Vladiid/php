<?php
$db = @mysqli_connect('localhost', 'root', '', 'gb') or die('Нет соединения c БД ');


mysqli_set_charset($db, 'utf8');
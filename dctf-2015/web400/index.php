<?php

// ini_set('display_errors',1);
// error_reporting(E_ALL);

mysql_connect('localhost','w400', 'lajsflkjaslfjasklfj10412497128') or die('neah');
mysql_select_db('w400');

if(isset($_GET['id'], $_GET['usr'])) {

    if(!is_numeric($_GET['id']) || !is_numeric($_GET['usr'])) {
        die('ID or User ID must be numeric, obviously. Cheers from Bucharest, awesome girls, smoke free. :-) <br><img src="data:image/jpeg;base64,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">');
    }

    $q = mysql_query('SELECT concat('.$_GET['id'].',"_",image) as path FROM images WHERE id="'.$_GET['usr'].'"');
    $path = mysql_result($q, 0);

    header('Content-Type: image/jpeg');
    echo shell_exec("cat images/$path 2>&1");
} else {
    echo '<h1>List of some users! I don\'t know CSS! :(</h1>';
    $q = mysql_query('SELECT * FROM `images`');
    while($row = mysql_fetch_array($q)) {
        echo '<h3>'.$row['user'].'</h3>';
        echo '<img src="?id='.$row['id'].'&usr='.$row['id'].'">';
    }
}
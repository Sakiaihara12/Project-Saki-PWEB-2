<?php
require_once('Controllers/Page.php');

if (isset($_GET['url'])) {
    $file = $_GET['url'];
} else {
    header("Location: ?url=home");
    exit();
}

$title = strtoupper($file);
$home = new Page("$title", "$file");
$home->call();

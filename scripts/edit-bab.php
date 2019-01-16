<?php
include 'db.php';
$id = $_GET["id"];
$name = $_GET["name"];
$accessCode = $_GET["access_code"];
$c->query("UPDATE bab SET name='" . $name . "', access_code='" . $accessCode . "' WHERE id='" . $id . "'");
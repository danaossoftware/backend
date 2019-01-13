<?php
include 'db.php';
$id = $_GET["id"];
$name = $_GET["name"];
$c->query("UDDATE bab SET name='" . $name . "' WHERE id='" . $id . "'");
<?php
include 'db.php';
$id = $_GET["id"];
$name = $_GET["name"];
$lecturer = $_GET["lecturer"];
$c->query("UPDATE courses SET name='" . $name . "' AND lecturer='" . $lecturer . "' WHERE id='" . $id . "'");
echo $id . "&" . $name . "&" . $lecturer;
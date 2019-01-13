<?php
include 'db.php';
$id = $_GET["id"];
$name = $_GET["name"];
$lecturer = $_GET["lecturer"];
if ($c->query("UPDATE courses SET name='" . $name . "' AND lecturer='" . $lecturer . "' WHERE id='" . $id . "'")) {
    echo 0;
} else {
    echo -1;
}
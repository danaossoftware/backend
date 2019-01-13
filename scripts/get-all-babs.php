<?php
include 'db.php';
$results = $c->query("SELECT * FROM bab");
if (!$results) {
    echo -1;
    return;
}
if ($results->num_rows > 0) {
    $response = "[";
    while ($row = $results->fetch_assoc()) {
        $response .= ("{\"id\": \"" . $row["id"] . "\", \"name\": \"" . $row["name"] . "\", \"course_id\": \"" . $row["course_id"] . "\", \"img_url\": \"" . $row["img_url"] . "\"}, ");
    }
    $response = substr($response, 0, strlen($response)-2);
    $response .= "]";
    echo $response;
} else {
    echo -2;
}
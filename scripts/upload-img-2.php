<?php
$imgFileName = $_POST["img_file_name"];
move_uploaded_file($_FILES["img_file"]["tmp_name"], "../userdata/imgs/" . $imgFileName);
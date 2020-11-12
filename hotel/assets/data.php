<?php
include 'fxn.php';

if (isset($_POST["State"])) {
    $temp_sid = $_POST["State"];
    $result = getThis("SELECT `id`, `name` FROM `cities` WHERE `state_id`=$temp_sid ORDER BY `name` ASC");
    echo json_encode($result);
}

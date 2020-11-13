<?php
include "assets/fxn.php";

$id = $_GET["id"];
$res = doThis("UPDATE `bookings` SET `enabled`= 0 WHERE `id`='$id'");
?>
<script>
    window.location = "dashboard.php";
</script>
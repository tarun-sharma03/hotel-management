<?php
include "assets/fxn.php";

$hotelID = $_GET["id"];
$checkin = $_GET["in"];
$checkout = $_GET["out"];
$userID = $_SESSION["UID"];

$res = doThis("INSERT INTO `bookings`(`userID`, `hotelID`, `checkin`, `checkout`, `enabled`) 
VALUES ('$userID', '$hotelID', '$checkin', '$checkout', 2)");

if ($res) {
?>
    <script>
        alert("Booking Requested!! Someone from hotel will contact you soon!");
        window.location = "bookings.php";
    </script>
<?php
} else {
?>
    <script>
        alert("There is some technical error!!");
        window.location = "dashboard.php";
    </script>
<?php
}
?>
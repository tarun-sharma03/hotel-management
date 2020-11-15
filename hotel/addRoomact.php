<?php include "assets/fxn.php";

if (isset($_POST["submit"])) {
    $hotelId = $_SESSION["UID"];
    $description = $_POST["desc"];
    $rent = $_POST["rent"];

    $res = doThis("INSERT INTO `rooms`(`hotelID`, `description`, `rent`) VALUES ('$hotelId', '$description', '$rent')");
    if ($res) {
?>
        <script>
            alert("Room Added Successfully!");
            window.location = "addroom.php";
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
}
?>
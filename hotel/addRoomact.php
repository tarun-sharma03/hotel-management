<?php include "assets/fxn.php";

if (isset($_POST["submit"])) {
    $hotelId = $_SESSION["UID"];
    $description = $_POST["desc"];
    $rent = $_POST["rent"];
    $name = $_POST["name"];

    $res = doThis("INSERT INTO `rooms`(`hotelID`,`name`, `description`, `rent`) VALUES ('$hotelId','$name', '$description', '$rent')");
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
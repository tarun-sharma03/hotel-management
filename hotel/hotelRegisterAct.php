<?php
include "assets/fxn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $description = $_POST["description"];
    $rent = $_POST["rent"];
    $state = $_POST["state"];
    $city = $_POST["city"];

    $res = doThis("INSERT INTO `hotels`(`fullName`, `email`, `mobile`, `password`, `address`, `description`, `rent`, `stateID`, `cityID`) 
    VALUES('$name', '$email', '$phone', '$password', '$address', '$description', '$rent', '$state', '$city')");

    if ($res) {
        $_SESSION["UID"] = $res;
?>
        <script>
            // window.location = "dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("There is some technical error!!");
            // window.location = "index.php";
        </script>
<?php
    }
}
?>
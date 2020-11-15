<?php
include "assets/fxn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $description = $_POST["description"];
    // $rent = $_POST["rent"];
    $state = $_POST["state"];
    $city = $_POST["city"];

    $check = getThis("SELECT * FROM `hotels` WHERE `email` = '$email' OR `mobile`='$phone'");
    if ($check) {
?>
        <script>
            alert("Hotel already registered!!");
            window.location = "index.php";
        </script>
        <?php
    } else {

        $res = doThis("INSERT INTO `hotels`(`fullName`, `email`, `mobile`, `password`, `address`, `description`, `stateID`, `cityID`) 
    VALUES('$name', '$email', '$phone', '$password', '$address', '$description', '$state', '$city')");

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
}
?>
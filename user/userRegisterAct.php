<?php
include "assets/fxn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $check = getThis("SELECT * FROM `users` WHERE `email`='$email' OR `mobile`='$phone'");
    if ($check) {
?>
        <script>
            alert("Guest already registered!!");
            window.location = "index.php";
        </script>
    <?php
    }

    $res = doThis("INSERT INTO `users`(`fullName`, `mobile`, `email`, `password`) VALUES('$name', '$phone', '$email', '$password')");
    if ($res) {
        $_SESSION["UID"] = $res;
    ?>
        <script>
            alert("Guest Registered!!");
            window.location = "dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("There is some technical error!!");
            window.location = "register.php";
        </script>
<?php
    }
}
?>
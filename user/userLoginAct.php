<?php
include "assets/fxn.php";
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $res = getThis("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    if ($res) {
        $_SESSION["UID"] = $res;
?>
        <script>
            window.location = "dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Wrong Information");
            window.location = "index.php";
        </script>
<?php
    }
}
?>
<?php
include "assets/fxn.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "password") {
        $_SESSION["UID"] = 1;
?>
        <script>
            alert("Admin Login Success!!");
            window.location = "dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Login failed!!!");
            window.location = "index.php";
        </script>
<?php
    }
}
?>
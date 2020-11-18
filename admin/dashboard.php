<?php include "header.php"; ?>




<div class="facilities">
    <div class="container">
        <div class="row icon_box_row">
            <?php
            $users = getThis("SELECT * FROM `users`");
            $hotels = getThis("SELECT * FROM `hotels`");
            $bookings = getThis("SELECT * FROM `bookings` WHERE `enabled`=1");

            ?>
            <br>
            <h1>Number of total users registered: <?php echo sizeof($users) . " active user(s)"; ?> </h1>
            <br> <br>
            <h1>Number of total hotels registered: <?php echo sizeof($hotels); ?> </h1>
            <br>
            <h1>Number of total bookings requested: <?php echo sizeof($bookings); ?> </h1>



        </div>
    </div>
</div>

<div class="facilities">
    <div class="container">


        <form action="dashboard.php" method="post">


            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Starting Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" name="startDate" id="example-date-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Ending Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" name="endDate" id="example-date-input">
                </div>
            </div>

            <button class="btn btn-block btn-success" name="submit">Submit</button>
        </form>

    </div>
</div>
</div>


<?php

if (isset($_POST["submit"])) {
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    $users1 = getThis("SELECT * FROM `users` WHERE `generatedAt` BETWEEN '$startDate' AND '$endDate'");
    $hotels1 = getThis("SELECT * FROM `hotels` WHERE `generatedAt` BETWEEN '$startDate' AND '$endDate'");
    $bookings1 = getThis("SELECT * FROM `bookings` WHERE `enabled`=1 AND `generatedAt` BETWEEN '$startDate' AND '$endDate'");
?>

    <div class="facilities">
        <div class="container">
            <div class="row icon_box_row">
                <br>
                <h1>Number of users registered in the selected Time Frame: <?php echo sizeof($users1) . " active user(s)"; ?> </h1>
                <br> <br>
                <h1>Number of hotels registered in the selected Time Frame: <?php echo sizeof($hotels1); ?> </h1>
                <br>
                <h1>Number of bookings requested in the selected Time Frame: <?php echo sizeof($bookings1); ?> </h1>



            </div>
        </div>
    </div>



<?php
}
?>
<?php include "footer.php"; ?>
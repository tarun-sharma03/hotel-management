<?php include "header.php";


?>

<body>

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/room_1.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">
                                <h1>Luxury & Comfort</h1>
                            </div>
                            <div class="home_text">Find and Book the best hotels in entire country. Let us make your holiday more memorable.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <br><br><br> -->
    <div class="facilities">
        <div class="container">
            <div class="row icon_box_row">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hotel Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">Rent Per Night</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php
                        $state = $_POST["state"];
                        $city = $_POST["city"];
                        $checkin = $_POST["checkin"];
                        $checkout = $_POST["checkout"];

                        $hotels = getThis("SELECT `id`, `fullName`, `email`, `mobile`, `password`, `address`, `description`, `rent` FROM `hotels` WHERE `stateID`='$state' AND `cityID`='$city' ORDER BY `fullName` ASC");

                        if ($hotels) {
                            for ($i = 0; $i < sizeof($hotels); $i++) {
                                $hotel = $hotels[$i];
                                $id = $hotel['id'];
                                $check = getThis("SELECT `id`, `userID`, `hotelID`, `checkin`, `checkout`, `enabled` FROM `bookings` WHERE `checkin` BETWEEN '$checkin' AND '$checkout' OR `checkout`>= '$checkin' AND `hotelID`='$id' AND `enabled`=1");

                        ?>
                                <tr>
                                    <td>
                                        <?php echo $i + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['fullName']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['description']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['rent']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (sizeof($check) == 0) {
                                        ?>
                                            <a href="details.php?id=<?php echo $hotel['id']; ?>&in=<?php echo $checkin; ?>&out=<?php echo $checkout; ?>" class="btn btn-primary">Details</a>
                                        <?php
                                        } else {
                                            echo "Unavailable on selected date";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php

                            }
                        } else {
                            ?>
                            <h4>
                                <?php echo "There are no hotels registered with us in this area!! Please suggest us some by filling the contact form."; ?>
                            </h4>
                        <?php
                        }


                        ?>


                    </tbody>
                </table>
                <a href="dashboard.php" class="btn btn-block btn-danger">Back to Search</a>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php"; ?>
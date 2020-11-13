<?php include "header.php";
$id = $_SESSION["UID"];
$bookings = getThis("SELECT * FROM `bookings` WHERE `userID`='$id'");

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
                            <th scope="col">Address</th>
                            <th scope="col">CheckIn Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < sizeof($bookings); $i++) {
                            $booking = $bookings[$i];
                            $hotelId = $booking['hotelID'];
                            $hotel = getThis("SELECT `fullName`, `address` from `hotels` WHERE `id`='$hotelId'");
                            $hotelName = $hotel[0]['fullName'];
                        ?>
                            <td>
                                <?php echo $i + 1; ?>
                            </td>
                            <td>
                                <?php echo $hotelName; ?>
                            </td>
                            <td>
                                <?php echo $hotel[0]['address']; ?>
                            </td>
                            <td>
                                <?php echo substr($booking['checkin'], 0, 10); ?>
                            </td>
                            <td>
                                <?php $en = $booking['enabled'];
                                if ($en == 2) {
                                    echo "Pending   ";
                                ?>
                                    <a href="cancelBooking.php?id=<?php echo $booking['id']; ?>" class="btn btn-danger"> Cancel</a>
                                <?php
                                } else if ($en == 1) {
                                    echo "Approved";
                                } else if ($en == 0) {
                                    echo "Cancelled";
                                }
                                ?>
                            </td>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>

    <?php include "footer.php"; ?>
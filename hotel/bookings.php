<?php include "header.php";
$id = $_SESSION["UID"];
$bookings = getThis("SELECT * FROM `bookings` WHERE `hotelID`='$id'");

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
                            <th scope="col">Guest Name</th>
                            <th scope="col">Check In Date</th>
                            <th scope="col">Check Out Date</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        for ($i = 0; $i < sizeof($bookings); $i++) {
                            $booking = $bookings[$i];
                        ?>
                            <tr>
                                <td>
                                    <?php echo $i + 1; ?>
                                </td>
                                <td>
                                    <?php $user = $booking['userID'];

                                    $userdetails = getThis("SELECT `fullName`, `mobile` FROM `users` WHERE `id`='$user'");
                                    $userdetails = $userdetails[0];
                                    echo $userdetails['fullName'];
                                    ?>
                                </td>
                                <td>
                                    <?php echo substr($booking['checkin'], 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($booking['checkout'], 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo $userdetails['mobile']; ?>
                                </td>
                                <td>
                                    <?php if ($booking['enabled'] == 1) {
                                        echo "Approved";
                                    } else {
                                        echo "Cancelled";
                                    }
                                    ?>
                                </td>
                            </tr>
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
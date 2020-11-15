<?php include "header.php";
$id = $_GET["id"];
$checkout = $_GET["out"];
$checkin = $_GET["in"];
$room = getThis("SELECT * FROM `rooms` WHERE `id`='$id'");
$room = $room[0];
$hotelId = $room['hotelID'];
$hotel = getThis("SELECT * FROM `hotels` WHERE `id`='$hotelId'");
$hotel = $hotel[0];
?>




<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_title">
                        <h1>
                            <?php echo $hotel['fullName']; ?>
                        </h1>
                    </div>
                    <div class="section_text"> <?php echo $hotel['description']; ?> </div>
                </div>
            </div>
        </div>
        <div class="row intro_row">
            <!-- Intro Image -->
            <div class="col-lg-6">
                <div class="intro_image"><img src="assets/images/xintro.jpg.pagespeed.ic.0kr7zghbz0.jpg" alt="https://unsplash.com/@papao03"></div>
            </div>
            <!-- Intro Content -->
            <div class="col-lg-6 intro_col">
                <div class="intro_content">
                    <div class="quote"><img src="assets/images/xquote.png.pagespeed.ic.Zukxn3IeVb.png" alt=""></div>
                    <div class="intro_text">
                        <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus hendrerit, id lobortis leo luctus nec.</p>
                    </div>
                    <div class="intro_author d-flex flex-row align-items-center justify-content-start">
                        <div class="author_image"><img src="assets/images/xauthor_1.jpg.pagespeed.ic.fQyFqxrZj3.jpg" alt="https://unsplash.com/@onurozkardes"></div>
                        <div class="intro_author_content">
                            <div class="intro_author_name">Michael Williams</div>
                            <div class="intro_author_title">client</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Gallery -->
<div class="gallery">
    <div class="gallery_slider_container">
        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">
            <!-- Slide -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="assets/images/gallery_1.jpg">
                    <div class="background_image" style="background-image:url(assets/images/gallery_1.jpg)"></div>
                </a>
                <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                    <div>+</div>
                </div>
            </div>
            <!-- Slide -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="assets/images/gallery_2.jpg">
                    <div class="background_image" style="background-image:url(assets/images/gallery_2.jpg)"></div>
                </a>
                <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                    <div>+</div>
                </div>
            </div>
            <!-- Slide -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="assets/images/gallery_3.jpg">
                    <div class="background_image" style="background-image:url(assets/images/gallery_3.jpg)"></div>
                </a>
                <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                    <div>+</div>
                </div>
            </div>
            <!-- Slide -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="assets/images/gallery_4.jpg">
                    <div class="background_image" style="background-image:url(assets/images/gallery_4.jpg)"></div>
                </a>
                <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                    <div>+</div>
                </div>
            </div>
            <!-- Slide -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="assets/images/gallery_5.jpg">
                    <div class="background_image" style="background-image:url(assets/images/gallery_5.jpg)"></div>
                </a>
                <div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center">
                    <div>+</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="facilities">
    <div class="container">
        <div class="row icon_box_row">

            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            <?php echo $hotel['address']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <?php echo $hotel['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contact Number
                        </td>
                        <td>
                            <?php echo $hotel['mobile']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Rent Description
                        </td>
                        <td>
                            <?php echo $room['description']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Rent Per Room Per Night
                        </td>
                        <td>
                            <?php echo $room['rent']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Action
                        </td>
                        <td>
                            <a href="bookHotel.php?id=<?php echo $room['id']; ?>&in=<?php echo $checkin; ?>&out=<?php echo $checkout; ?>" class="btn btn-success">Book Now</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <a href="dashboard.php" class="btn btn-block btn-danger">Cancel Search</a>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
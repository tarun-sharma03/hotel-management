<?php include "header.php"; ?>
<!-- Menu -->

<!-- Home -->
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/index.jpg" data-speed="0.8"></div>
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
<!-- Search Box -->
<div class="search_box" id="search_box">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_box_container d-flex flex-row align-items-center justify-content-start">
                    <div class="search_form_container">
                        <form action="#" id="search_form" class="search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">
                                    <!-- <div class="search_dropdown d-flex flex-row divgn-items-center justify-content-start"> -->
                                    <!-- <select name="state" class="search_dropdown d-flex flex-row align-items-center justify-content-start"> -->
                                    <li class="search_dropdown d-flex flex-row align-items-center justify-content-start" name="state">
                                        <span>State</span>
                                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                                        <ul>
                                            <?php
                                            $states = getThis("SELECT * FROM `states` WHERE `country_id`=101");
                                            for ($i = 0; $i < sizeof($states); $i++) {
                                                $state = $states[$i];
                                            ?>
                                                <!-- <option value="0" class="search_dropdown d-flex flex-row align-items-center justify-content-start">test</option> -->
                                                <li value="<?php echo $state['id']; ?>"> <?php echo $state['name']; ?> </li>
                                            <?php
                                            }
                                            ?>
                                            <!-- </select> -->
                                        </ul>
                                    </li>

                                    <!-- </div> -->
                                    <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">
                                        <span>Check out</span>
                                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                                        <ul>
                                            <li>Check out item 1</li>
                                            <li>Check out item 2</li>
                                            <li>Check out item 3</li>
                                            <li>Check out item 4</li>
                                            <li>Check out item 5</li>
                                        </ul>
                                    </li>
                                    <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">
                                        <span>Guests</span>
                                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                        </ul>
                                    </li>
                                    <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">
                                        <span>Children</span>
                                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                        </ul>
                                    </li>
                                    <li class="search_dropdown d-flex flex-row align-items-center justify-content-start">
                                        <span>Rooms</span>
                                        <i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                        </ul>
                                    </li>
                                </ul>
                                <button class="search_button">search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_title">
                        <h1>Beach Hotel- More than a stay</h1>
                    </div>
                    <div class="section_text">In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</div>
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
<!-- Room -->
<div class="room d-flex flex-lg-row flex-column align-items-start justify-content-start">
    <div class="room_content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="room_title">
                        <div class="section_title_container_2">
                            <div class="section_title">
                                <h1>Deluxe Rooms</h1>
                            </div>
                        </div>
                        <div class="room_price">From <span>INR 2000</span>/ night</div>
                    </div>
                    <div class="room_list">
                        <ul>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>Bed:</div>
                                </div>
                                <div>Double bed</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>Capacity:</div>
                                </div>
                                <div>2 adults</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>Room size:</div>
                                </div>
                                <div>55m²</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>View:</div>
                                </div>
                                <div>Sea view</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>Facilities:</div>
                                </div>
                                <div>Iron, TV, Hair dryer</div>
                            </li>
                        </ul>
                    </div>
                    <div class="button room_button trans_200"><a href="#">book now</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="room_image">
        <div class="background_image" style="background-image:url(assets/images/room_1.jpg)"></div>
    </div>
</div>
<!-- Facilities -->
<div class="facilities">
    <div class="container">
        <div class="row icon_box_row">
            <!-- Icon Box -->
            <div class="col-lg-4">
                <div class="icon_box text-center">
                    <div class="icon_box_icon"><img src="assets/images/icon_1.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                    <div class="icon_box_title">
                        <h2>Beautiful Rooms</h2>
                    </div>
                    <div class="icon_box_text">
                        <p>Best in class rooms with best in class services. Each hotel is verified by a Awesome Room QA Officer.</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4">
                <div class="icon_box text-center">
                    <div class="icon_box_icon"><img src="assets/images/icon_2.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                    <div class="icon_box_title">
                        <h2>Swimming Pool</h2>
                    </div>
                    <div class="icon_box_text">
                        <p>Enjoy the benefit of free Swimming Pool facility for all bookings with Awesome Rooms during the summer season. NO hidden charges.</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4">
                <div class="icon_box text-center">
                    <div class="icon_box_icon"><img src="assets/images/icon_3.svg" alt="https://www.flaticon.com/authors/monkik"></div>
                    <div class="icon_box_title">
                        <h2>Luxury Resort</h2>
                    </div>
                    <div class="icon_box_text">
                        <p>Luxury at its best. Complementary meals, free high speed internet and on-deman customization to the room. Make your holiday more memorable.</p>
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


<br>
<br>
<!-- Contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <!-- Contact Map -->
            <div class="col-xl-6">
                <div class="contact_map_container">
                    <!-- Contact Map -->
                    <div class="contact_map">
                        <!-- Google Map -->
                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224091.40838419762!2d76.95283546242445!3d28.64689309731998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1605104957459!5m2!1sen!2sin" width="1200" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info Box -->
                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                        <ul class="contact_info_list">
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="assets/images/xplaceholder.png.pagespeed.ic.lkN5Lkj0Nm.png" alt=""></div>
                                </div>
                                <div class="contact_info_text">Awesome Rooms HQ, New Delhi</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>
                                    <div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="assets/images/xsmartphone.png.pagespeed.ic.CK0OMSMqN8.png" alt=""></div>
                                </div>
                                <div class="contact_info_text">1800-180-100</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>
                                    <div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="assets/images/xmail.png.pagespeed.ic.PqM9NywUcJ.png" alt=""></div>
                                </div>
                                <div class="contact_info_text">admin@awesomeroom.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-xl-6 contact_col">
                <div class="contact_form_container">
                    <div class="section_title_container_2">
                        <div class="section_title">
                            <h1>Contact Info</h1>
                        </div>
                        <div class="section_text">We value your feedback. Contact Awesome Rooms directly.</div>
                    </div>
                    <form action="#" class="contact_form" id="contact_form">
                        <div class="row contact_row">
                            <div class="col-md-6"><input type="text" class="contact_input" placeholder="Name" required></div>
                            <div class="col-md-6"><input type="email" class="contact_input" placeholder="E-mail" required></div>
                        </div>
                        <div><textarea class="contact_input contact_textarea" placeholder="Message" required></textarea></div>
                        <button class="contact_button">send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>


<script type="text/javascript">
    $(document).ready(function() {
        $("#Country_c").change(function() {
            var CountryID = $("#Country_c").val();
            $.ajax({
                url: 'assets/worldData.php',
                method: 'post',
                data: 'Country=' + CountryID
            }).done(function(countries) {
                states = JSON.parse(countries);
                $('#State_c').empty();
                $('#State_c').append('<option disabled selected>Select State</option>');
                states.forEach(function(state) {
                    $('#State_c').append('<option value=' + state.id + '>' + state.name + '</option>');
                })
                $('#State_c').append('<option value=0>My option is not listed</option>');
            })
        });
        $("#State_c").change(function() {
            var StateID = $("#State_c").val();
            $.ajax({
                url: 'assets/worldData.php',
                method: 'post',
                data: 'State=' + StateID
            }).done(function(states) {
                cities = JSON.parse(states);
                $('#City_c').empty();
                $('#City_c').append('<option disabled selected>Select City</option>');
                cities.forEach(function(city) {
                    $('#City_c').append('<option value=' + city.id + '>' + city.name + '</option>');
                })
                $('#City_c').append('<option value=0>My option is not listed</option>');
            })
        });
    })
</script>
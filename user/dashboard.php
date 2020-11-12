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
                                <table class="table table-borderless">
                                    <thead>
                                        <td>
                                            <div class="position-relative form-group"><label for="exampleCity" class="home_text">State</label><select class="form-control" name="state" id="State_c" required>
                                                    <option selected disabled>Select State</option>
                                                    <?php $country = getThis("SELECT `id`, `name` FROM `states` WHERE `country_id`=101 ORDER BY `name` ASC") ?>
                                                    <?php foreach ($country as $k => $c) { ?>
                                                        <option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
                                                    <?php } ?>
                                                </select></div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group"><label for="exampleCity" class="home_text">City</label><select class="form-control" name="city" id="City_c" required>
                                                    <option disabled selected>Select State First</option>
                                                </select></div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="exampleCity" class="home_text">Check-In Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="position-relative form-group">
                                                <label for="exampleCity" class="home_text">Check-Out Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="search_button">search</button>
                                        </td>
                                    </thead>
                                </table>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
</div>
<br>
<?php include "footer.php"; ?>



<script type="text/javascript">
    $(document).ready(function() {

        $("#State_c").change(function() {
            var StateID = $("#State_c").val();
            $.ajax({
                url: 'assets/data.php',
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
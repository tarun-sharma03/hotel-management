<?php include "header.php"; ?>

<div class="home">
    <!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/room_1.jpg" data-speed="0.8"></div>
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
    </div> -->
</div>
<style>
    body {
        font-family: 'Lato', sans-serif;
        color: white;
        background-color: #334BFF;
    }

    h1 {
        font-size: 60px;
        margin: 0px;
        padding: 0px;
    }

    h3 {
        margin: 0px;
        padding: 0px;
        color: #999;
    }

    div.wrap {
        width: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        vertical-align: middle;
    }

    div.wrap div {
        position: relative;
        margin: 50px 0;
    }

    label {
        position: absolute;
        top: 0;
        font-size: 30px;
        margin: 10px;
        padding: 0 10px;
        background-color: #334BFF;
        -webkit-transition: top .2s ease-in-out,
            font-size .2s ease-in-out;
        transition: top .2s ease-in-out,
            font-size .2s ease-in-out;
    }

    .active {
        top: -25px;
        font-size: 20px;
    }

    input[type=text] {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: #334BFF;
        color: white;
    }

    input[type=text]:focus {
        outline: none;
    }
</style>





<div class="wrap">
    <h1>Add Room</h1>
    <h3>Input the details of the rooms you want to list on Awesome Rooms</h3>
    <form action="addRoomact.php" method="post">
        <div>
            <label for="fname">Room Description</label>
            <input type="text" class="cool" name="desc" />
        </div>

        <div>
            <label for="lname">Room Rent</label>
            <input type="number" class="cool" name="rent" />
        </div>

        <div>
            <button type="submit" name="submit" class="btn btn-block btn-success">Submit</button>
        </div>
    </form>
</div>





<?php include "footer.php"; ?>
<script>
    $('input').on('focusin', function() {
        $(this).parent().find('label').addClass('active');
    });

    $('input').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('active');
        }
    });
</script>
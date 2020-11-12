<?php include "assets/fxn.php"; ?>
<html>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<style>
    /*author:starttemplate*/
    /*reference site : starttemplate.com*/
    body {
        background-image: url('assets/images/blog_3.jpg');
        background-position: center;
        background-size: cover;

        /*  */
    }

    .form-container {
        padding: 110px;
        margin-top: 50px;
        margin-bottom: 50px;


        -webkit-font-smoothing: antialiased;
        font: normal 14px Roboto, arial, sans-serif;
        font-family: 'Dancing Script', cursive !important;

    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white !important;
        opacity: 1;
        /* Firefox */
        font-size: 18px !important;
    }

    .form-login {
        background-color: rgba(0, 0, 0, 0.55);
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        border-color: #d2d2d2;
        border-width: 5px;
        color: white;
        box-shadow: 0 1px 0 #cfcfcf;
    }

    .form-control {
        background: transparent !important;
        color: white !important;
        font-size: 14px !important;
    }

    h1 {
        color: white !important;
    }

    h4 {
        border: 0 solid #fff;
        border-bottom-width: 1px;
        padding-bottom: 10px;
        text-align: center;
    }

    .form-control {
        border-radius: 10px;
        height: 50px;
    }

    .text-white {
        color: black !important;
    }

    .wrapper {
        text-align: center;
    }

    .footer p {
        font-size: 18px;
    }
</style>

<body>
    <!-- Page Content -->
    <div class="form-body">
        <div class="form-container">
            <div class="row">
                <div class="col-md-offset-5 col-md-4 text-center">
                    <h1 class='text-white'>Registeration Form</h1>
                    <div class="form-login"></br>
                        <h4>Awesome Rooms Hotel Registeration</h4>
                        </br>
                        <form action="hotelRegisterAct.php" method="post">
                            <input type="text" name="fullname" class="form-control input-sm chat-input" placeholder="Full Name" />
                            </br></br>
                            <input type="email" name="email" class="form-control input-sm chat-input" placeholder="Email" />
                            </br></br>
                            <input type="text" name="phone" class="form-control input-sm chat-input" placeholder="10 Digit Mobile" />
                            </br></br>
                            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
                            </br></br>
                            <input type="text" name="address" class="form-control input-sm chat-input" placeholder="postal address" />
                            </br></br>
                            <input type="text" name="description" class="form-control input-sm chat-input" placeholder="Description" />
                            </br></br>
                            <input type="number" name="rent" class="form-control input-sm chat-input" placeholder="Rent Per Night Per Room" />
                            </br></br>
                            <div class="position-relative form-group">
                                <!-- <label for="exampleCity" class="home_text">State</label> -->
                                <select class="form-control" name="state" id="State_c" required>
                                    <option selected disabled>Select State</option>
                                    <?php $country = getThis("SELECT `id`, `name` FROM `states` WHERE `country_id`=101 ORDER BY `name` ASC") ?>
                                    <?php foreach ($country as $k => $c) { ?>
                                        <option style="color: black;" value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
                                    <?php } ?>
                                </select></div>
                            <br><br>
                            <div class="position-relative form-group">
                                <!-- <label for="exampleCity" class="home_text">City</label> -->
                                <select class="form-control" name="city" id="City_c" required>
                                    <option disabled selected>Select State First</option>
                                </select></div>
                            <div class="wrapper">
                                <span class="group-btn">
                                    <button type="submit" name="submit" class="btn btn-danger btn-md">Submit <i class="fa fa-user-plus"></i></button>
                                </span>
                                <span class="group-btn">
                                    <a href="index.php" class="btn btn-danger btn-md">login <i class="fa fa-sign-in"></i></a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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
                    $('#City_c').append('<option style="color: black;" value=' + city.id + '>' + city.name + '</option>');
                })
                $('#City_c').append('<option style="color: black;" value=0>My option is not listed</option>');
            })
        });
    })
</script>
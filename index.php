<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<div class="row">
    <div class="col-sm-12 first-img d-flex align-items-center justify-content-center flex-column">
        <!--            <img src="img/woman-422706_1920.jpg" width="100%" height="80%" alt="">-->

        <h1 class="p-2"><strong>HTD GUSTO</strong></h1>
        <h2 class="p-2"><strong>RESTAURANT</strong></h2>
        <a href="menu.php"><button class="btn btn-warning p-2 ">LE MENU</button> </a>


    </div>
</div>
<div class="row">
    <div class="col-sm-6 ok d-flex align-items-center justify-content-center  ">




    </div>
    <div class="col-sm-6 text-center d-flex align-items-center justify-content-center flex-column">

        <h2 class=""><ins>Spécialités japonaises</ins></h2>
        <p class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quasi molestiae optio ipsam placeat repudiandae deleniti voluptas aut, voluptates eveniet illum, vero maxime voluptatem. Quibusdam vel, iure alias velit fuga.</p> <br> <br>
       <a href="menu.php"><button class="btn btn-warning p-2">LE MENU</button> </a>

    </div>

</div>
<div class="row">
    <div class="col-sm-12 fixe d-flex justify-content-center align-items-center">
        <h1 class='text-white btn-viande'><a href="menu.php">LE MENU</a></h1>

    </div>
</div>
<div class="row">
    <div class="col-sm-6 text-center d-flex align-items-center justify-content-center flex-column">
        <h2 class="p-2"><ins>spécialités italiennes</ins></h2>
        <p class="text-white p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque a laboriosam, maiores mollitia quae vitae, porro consequatur corrupti voluptas suscipit iste eum laudantium, voluptatum dolorum illo inventore ipsam laborum! Optio.</p>
        <a href="menu.php"><button class="btn btn-warning p-2">LE MENU</button> </a>
    </div>
    <div class="col-sm-6 patte">

    </div>
</div>







<!-- TON CODE ICI -->



<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">


</script>
<script>
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 5) {

            $('header nav').removeClass('navbar-dark');
            $('header nav').addClass('navbar-light');
            $('header nav').addClass('black');
            $('.logo').attr({
                'src': "assets/img/brand_logo_black.png"
            });
        } else {
            $('header nav').removeClass('navbar-light');
            $('header nav').removeClass('black');
            $('header nav').addClass('navbar-dark');
            $('.logo').attr({
                'src': "assets/img/brand_logo.png"
            });
        }
    });

</script>
<!-- Bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">


</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">


</script>
<!-- AOS On Scroll Effect Js -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init();

</script>

<!--slide-->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--slide-->


<?php include 'includes/footer.php';?>

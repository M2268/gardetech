<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<style>
    .logo {
        position: absolute;
        margin-top: 5%;
        margin-left: 5%;
    }
    .body{
        padding:0!important;
    }
</style>
<script>
    $('.gal-item').click(function(){
        $(".main-photo").find("img").attr('src') = $(this).find('img').attr('src');
    })
</script>
    <!-- Navigation -->
<?php  //include "includes/navigation.php"; ?>

    <!-- Page Content -->
<?php // include "includes/carousel.php"; ?>

    <div id="myCarousel" class="carousel slide">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="position:relative">
                <div>
                    <a href="#"> <div class="logo" style="margin-top: 3%"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"> </div></a>
                    <img src="http://lorempixel.com/1680/300/nature/1/CATEGORY%20IMAGE/">
                </div>
            </div>
            <!--
                        <div class="item" style="position:relative">
                            <div>
                            <div class="logo"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"> </div>
                            <img src="http://lorempixel.com/1680/670/nature/5/">
                        </div>
                        </div>

                        <div class="item" style="position:relative">
                            <div>
                            <div class="logo"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"> </div>
                            <img src="http://lorempixel.com/1680/670/nature/6/">
                        </div>
            -->
        </div>

    </div>

    <div class="container" style="padding:90px 0px;">
        <div class="col-xs-12 col-md-6">
            <h1>Kontakt</h1>
            <p>
                <br>
                Gardetech Sp. z o.o.<br>
                ul. Robotnicza 72<br>
                53-608 Wrocław Poland<br>
<br>


                <br>
                Mail: info@gardetech.com<br>
                Tel: +48 510132669<br>
                Tel: +48 717827965<br>
                Fax: +48 717827950<br>
<br>
<br>
                NIP: 894-27-18-960<br>
                KRS 0000100398<br>
                Kapitał 50 000 PLN<br>
                Sąd Rejonowy dla Wrocławia Fabryczna VI Wydział Gospodarczy KRS<br><br>
            </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.822566848782!2d16.997086715264352!3d51.11173377957203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc201893d52d7%3A0xfdcd0993718f87f5!2sRobotnicza+72%2C+Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1488147611164" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
</row>
    </div>
        <hr>
        <!-- Footer -->
<?php include "includes/footer.php"; ?>
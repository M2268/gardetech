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
        <div class="col-xs-12">
            <h1>Kim jesteśmy?</h1>
            <p><br>
                <br>
                <br>
                Gardetech sp. z o.o. powstała w roku 2002 i od tego czasu nieprzerwanie dostarcza polskim  i europejskim użytkownikom sprzęt, akcesoria i urządzenia do wykorzystania w ogrodzie, lesie, na plantacjach  i polach uprawnych.<br>
            <div style="display:flex; justify-content: space-around; flex-wrap:wrap;">
                <div class="about-img"><img src="http://gardetech.com/wp-content/uploads/2013/10/41-300x200.jpg" ></div>
                <div class="about-img"><img src="http://gardetech.com/wp-content/uploads/2013/10/1-300x212.jpg" ></div>
                <div class="about-img"><img src="http://gardetech.com/wp-content/uploads/2013/10/3-300x199.jpg" ></div>
                <div class="about-img"><img src="http://gardetech.com/wp-content/uploads/2013/10/2-300x199.jpg" ></div>
                <div class="about-img"><img src="http://gardetech.com/wp-content/uploads/2013/10/1-300x212.jpg" ></div>
            </div>
                <br>
                Urządzenia w naszej ofercie cechują się wysoką wydajnością, niezawodnością i atrakcyjną, dostosowaną do możliwości finansowych każdego klienta ceną. Współpracujemy z renomowanymi, światowymi dostawcami podzespołów. Czuwamy nad procesem produkcji wszystkich towarów z naszej oferty. Ostatnim etapem każdego z takich procesów jest rygorystyczna kontrola jakości, wykonywana przez wyspecjalizowaną agencję w miejscu produkcji, uwieńczona szczegółowym raportem. Przedstawiamy Państwu przykład takiego sprawozdania.<br>
<br>
                Jako producent gwarantujemy prawidłową pracę naszych urządzeń, udzielając dwuletniej gwarancji na każdy sprzedawany sprzęt. Każda sztuka zaopatrzona jest w szczegółową, czytelną instrukcję obsługi.<br>
<br>
                Dokonując zakupu jednego z naszych urządzeń klient ma pewność dokonania właściwego wyboru solidnego sprzętu, a w przypadku wątpliwości czy kłopotów z samodzielnym uruchomieniem, użytkowaniem czy konserwacją może skorzystać z fachowej pomocy naszych doradców technicznych.<br>
<br>
                Sprzęt ogrodniczy, zarówno ten produkowany, jak i dystrybuowany przez Gardetech sp. z o.o. można kupić w największych sieciach handlowych ‘dom i ogród’ w Polsce, takich jak Castorama, Leroy Merlin, Bricomarche a także w naszym sklepie internetowym.<br>
                Serdecznie zapraszamy do współpracy i zakupów.<br>
<br>
            <div style="float:right;"><b>Ekipa Gardetech sp. z o.o.</b></div><br>
            </p>
        </div>

</row>

    </div>

        <hr>
        <!-- Footer -->
<?php include "includes/footer.php"; ?>
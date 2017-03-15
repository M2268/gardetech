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

<?php

if(isset($_GET['p_id'])){
    $get_product_id = $_GET['p_id'];
}
$query = "SELECT * FROM products WHERE product_id = {$get_product_id}";
$select_all_products = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_products))
{
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_author = $row['product_author'];
    $product_date = $row['product_date'];
    $product_image = $row['product_image'];
    $product_content = $row['product_content'];

    ?>

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
            <a href="product_page.php?p_id=<?php echo $product_id; ?>"><?php echo $product_name ?></a>
            <h1>Pilarka piła łańcuchowa spalinowa 2,45KM Gardetech</h1>
            <p>Pilarka spalinowa umożliwi Ci profesjonalne cięcie drewna przeznaczonego na opał, czy do budowy konstrukcji ogrodowych. Narzędzie charakteryzuje się cichą pracą. Produkt możesz także wykorzystać do podcięcia gałęzi utrudniających swobodne przemieszczanie.</p>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
            <div class="main-photo">
                <img src="https://gardenworld.pl/pol_pl_Pilarka-pila-lancuchowa-spalinowa-2-45KM-Gardetech-12926_1.png">
            </div>
            <div class="gallery">
                <div class="gal-item"><img src="https://gardenworld.pl/pol_pl_Pilarka-pila-lancuchowa-spalinowa-2-45KM-Gardetech-12926_1.png"> </div>
                <div class="gal-item"><img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_-8433_2.jpg"> </div>
                <div class="gal-item"><img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_-8433_3.jpg"> </div>
                <div class="gal-item"><img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_-8433_1.jpg"> </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>Producent: </td>
                    <td>GardeTech</td>
                </tr>
                <tr>
                    <td>Kod produktu: </td>
                    <td>MTGT45</td>
                </tr>
                <tr>
                    <td>Gwarancja </td>
                    <td>2 lata</td>
                </tr>
                <tr>
                    <td>Moc silnika (kW/KM): </td>
                    <td>1.8 / 2.45</td>
                </tr>
                <tr>
                    <td>Typ silnika:</td>
                    <td>2 suwowy, chłodzony powietrzem </td>
                </tr>
                <tr>
                    <td>Moment obrotowy:</td>
                    <td>8500 obr./min</td>
                </tr>
                <tr>
                    <td>Pojemność zbiornika paliwa (ml):</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>Podziałka łańcucha (cal):</td>
                    <td>0,325</td>
                </tr>
                <tr>
                    <td>Pojemność zbiornika oleju (ml):</td>
                    <td>260</td>
                </tr>
                <tr>
                    <td>Długość prowadnicy łańcucha (cm):</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Prędkość przesuwu łańcucha (m/s):</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td>Waga (kg):</td>
                    <td>6,72</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <a style="font-weight:400; color:black; " href="https://gardenworld.pl/settings.php?getAttachmentp=1652_12926_8ccac800f9cdee8746f892e57709a043">Instrukcja obsługi</a>
                    </td>
                </tr>

                </tbody>
            </table>
            <div class="col-xs-12 col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/K4YDMmWBac4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>


</row>

        <div class="col-xs-12 col-md-12">
<hr>
            <h2>Opis produktu</h2>
            <span>
Wytrzymała i skuteczna w działaniu pilarka <b>GardeTech 2,45KM</b> jest urządzeniem sprawdzającym się w zróżnicowanych warunkach. Komfort wykorzystywania piły w praktyce sprawia, że jest ona doskonałym wyborem dla każdego użytkownika. Piła łańcuchowa spalinowa <b>2,45KM</b>  charakteryzuje się minimalnym zużyciem paliwa, a jednocześnie potrafi ona uzyskać wysoką moc działania. Jest to ekonomiczne urządzenie, świetnie sprawdzające się przy pracach polegających na przygotowaniu drewna opałowego.<br>
<br>
Mieszkasz w domu jednorodzinnym albo często przebywasz na leśnej działce, a ogrzewanie w chłodniejszym sezonie wymaga palenia drewnem? Możesz samodzielnie przygotować jego zapas, korzystając z rewelacyjnej i prostej w obsłudze pilarki piły łańcuchowej GardeTech 2,45KM.<br>
<br>
                <b><li style="margin-left:40px;">Solidna i stabilna konstrukcja</li></b>
<br>
Dzięki odpowiednim materiałom i wykorzystanym podzespołom pilarka jest urządzeniem bardzo wytrzymałym i mało awaryjnym. Sprawdza się też w każdych, nawet najtrudniejszych warunkach.<br>
<br>
    <b><li style="margin-left:40px;">Oszczędność paliwa</li></b>
<br>
Zastosowanie specjalnie dobranego silnika o mocy 2,45KM sprawia, że możesz przestać martwić się o koszty użytkowania. Zużycie paliwa jest minimalne i wynosi zaledwie 550ml na kilka godzin pracy. Jeden zbiornik pozwoli ci uporządkować cały ogród. Piła wymaga specjalnej mieszanki paliwa w proporcji 25:1 benzyny 95 oktanowej z olejem do silników 2suwowych.<br>
<br>
    <b><li style="margin-left:40px;">Komfort użytkowania</li></b>
<br>
Dzięki niewielkim wymiarom (40 x 25 x 30cm), wadze około 7kg i długiej prowadnicy (45cm) cięcie gałęzi jest proste, a ty możesz dotrzeć wszędzie, gdzie tego potrzebujesz. Skok łańcucha to 0,325’’.<br>
<br>
    <b><li style="margin-left:40px;">Bezpieczeństwo użytkowania</li></b>
<br>
Odpowiednie zabezpieczenia eliminują do minimum zagrożenie, więc nie musisz się bać, że podczas pracy dojdzie do wypadku. Urządzenie zostało wyposażone w odpowiednie blokady zgodne z najwyższymi normami wyznaczonymi przez Unię Europejską.<br>
<br>
    <b><li style="margin-left:40px;">Szybkie i łatwe cięcie</li></b>
<br>
Dzięki bardzo wysokiemu momentowi obrotowemu 8500 obr./min cięcie nawet dużych kłód drewna nie stanowi problemu. Dla ciebie będzie ono jak krojenie nożem masła nie wymagając wielkiego wysiłku.<br>
<br>
Decydując się na zakup pilarki piły łańcuchowej GardeTech 2,45KM zapewniasz sobie doskonałe wsparcie narzędziowe przy porządkowaniu ogrodu czy przygotowywaniu zapasu opału na zimę. Ekonomiczne, ciche i praktyczne, a także łatwe w obsłudze urządzenie z pewnością szybko docenisz. Dlatego zamów je już teraz.<br>
<br>
W skład zestawu wchodzi:<br>
<br>
                <ul>
                    <li>pilarka,<br></li>
                    <li>prowadnica,<br></li>
                    <li>łańcuch,<br></li>
                    <li>osłona prowadnicy,<br></li>
                    <li>komplet kluczy do montażu,<br></li>
                    <li>zbiornik do przygotowywania mieszanki,<br></li>
                    <li>instrukcja obsługi<br></li>
                    <li>gwarancja<br></li>
                    </ul>
</span>

        </div>


    </div>







        <hr>
        <!-- Footer -->
<?php include "includes/footer.php"; ?>
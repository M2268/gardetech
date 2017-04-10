<div class="firstMenu container-fluid pm-0">
    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12  pm-0 f-cont">
        <div class="ico-center"><img style="width: 80%; height: 80%;" src="images/ct1.png"></div>
        <div class="col-lg-12 col-xs-12 f-title pm-0"><h4 class="f-title">Oferta</h4></div>
        <div class="col-lg-12 col-xs-12" style="padding: 20px;">
            <ul class="nav nav-pills nav-stacked" id="li-first-menu">
              <!--  <li class="dropdown">
                    <a class="dropdown-toggle fmenu-vertical" data-toggle="dropdown" href="#">kategoria 0
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class='fmenu-vertical'>podkategoria 1</a></li>
                        <li><a href="#" class='fmenu-vertical'>podkategoria 2</a></li>
                        <li><a href="#" class='fmenu-vertical'>podkategoria 3</a></li>
                    </ul>
                </li> -->
                <?php

                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection, $query);
                $i = 1;
                while ($row = mysqli_fetch_assoc($select_all_categories)) {
                    $cat_name = $row['cat_name'];
                    echo "<li><a href='/category.php?catID=".$i++."' class='fmenu-vertical' >{$cat_name}</a></li>";
                }

                ?>
            </ul>

        </div>
    </div>
    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12  pm-0 f-cont">
        <div class="ico-center"><img style="width: 80%; height: 80%;" src="images/ct3.png"></div>
        <div class="col-lg-12 col-xs-12 f-title pm-0"><h4 class="f-title">O nas</h4></div>
        <div class="col-lg-12 col-xs-12" style="padding: 20px; text-align:center;"><span><b>Gardetech sp. z o.o.</b> powstała w roku 2002 i od tego czasu nieprzerwanie dostarcza polskim  i europejskim użytkownikom sprzęt, akcesoria i urządzenia do wykorzystania w ogrodzie, lesie, na plantacjach  i polach uprawnych.<br><a href="/about.php">Więcej</a> </span>
        </div>
    </div>
    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12  pm-0 f-cont">
        <div class="ico-center"><img style="width: 80%; height: 80%;" src="images/ct2.png"></div>
        <div class="col-lg-12 col-xs-12 f-title pm-0"><h4 class="f-title">Kontakt</h4></div>
        <div class="col-lg-12 col-xs-12" style="padding: 20px; text-align: center">
<span>
                Gardetech Sp. z o.o.<br>
ul. Robotnicza 72<br>
53-608 Wrocław Poland<br>
<br>
Tel: +48 510132669<br>
Tel: +48 717827965<br>
Fax: +48 717827950<br>
      <a href="/contact.php">Więcej</a></span></div>
    </div>
    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12 pm-0 f-cont">
        <div class="ico-center"><img style="width: 70%; height: 70%;" src="images/ct4.png"></div>
        <div class="col-lg-12 col-xs-12 f-title pm-0"><h4 class="f-title">Wyszukaj produkty</h4></div>
        <div class="col-lg-12 col-xs-12" style="padding: 20px; padding-top:40px; height:180px">
            <form action="search.php" method="post">
                <label for="search">Co chciałbyś znaleźć?</label>
                <div class="input-group">
                    <input name="search" type="text" class="form-control">
                    <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" style="padding: 9px 12px;" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
            </form>
        </div>
    </div>

</div>

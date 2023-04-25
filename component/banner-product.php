<!-- Desktop -->
<div class="banner">
    <swiper-container class="mySwiper" pagination="false" pagination-clickable="false" navigation="false" space-between="30"
        centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
        <swiper-slide>
            <?php
                if ($_GET['model'] == 'yz125x') {
                    ?>
                    <img src="img/banner-yz125x-desktop.jpg" class="img-fluid">
                    <?php
                } elseif ($_GET['model'] == 'yz250x') {
                    ?>
                    <img src="img/banner-yz250x-desktop.jpg" class="img-fluid">
                    <?php
                } elseif ($_GET['model'] == 'yz250f') {
                    ?>
                    <img src="img/banner-yz250f-desktop.jpg" class="img-fluid">
                    <?php
                } else {
                    ?>
                    <img src="img/banner-yz250fx-desktop.jpg" class="img-fluid">
                    <?php
                }
            ?>
        </swiper-slide>
    </swiper-container>
</div>
<!-- END Desktop -->

<!-- Mobile -->
<div class="banner-mobile">
    <swiper-container class="mySwiper" pagination="false" pagination-clickable="false" navigation="false" space-between="30"
        centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
        <swiper-slide>
            <?php
                if ($_GET['model'] == 'yz125x') {
                    ?>
                    <img src="img/banner-yz125x-mobile.jpg" class="img-fluid">
                    <?php
                } elseif ($_GET['model'] == 'yz250x') {
                    ?>
                    <img src="img/banner-yz250x-mobile.jpg" class="img-fluid">
                    <?php
                } elseif ($_GET['model'] == 'yz250f') {
                    ?>
                    <img src="img/banner-yz250f-mobile.jpg" class="img-fluid">
                    <?php
                } else {
                    ?>
                    <img src="img/banner-yz250fx-mobile.jpg" class="img-fluid">
                    <?php
                }
            ?>
        </swiper-slide>
    </swiper-container>
</div>
<!-- END Mobile -->
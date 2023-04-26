<div class="model">
    <div class="row justify-content-center text-center">
        <?php
            if ($_GET['model'] == 'yz125x') {
                ?>
                    <img src="img/yz125x.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha <span id="model">YZ125X</span></a>
                    </div>
                <?php
            } elseif ($_GET['model'] == 'yz250x') {
                ?>
                    <img src="img/yz250x.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha <span id="model">YZ250X</span></a>
                    </div>
                <?php
            } elseif ($_GET['model'] == 'yz250f') {
                ?>
                    <img src="img/yz250f.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha <span id="model">YZ250F</span></a>
                    </div>
                <?php
            } else {
                ?>
                    <img src="img/yz250fx.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha <span id="model">YZ250FX</span></a>
                    </div>
                <?php
            }
        ?>
    </div>
</div>
<div class="model">
    <div class="row justify-content-center text-center">
        <?php
            if ($_GET['model'] == 'yz125x') {
                ?>
                    <img src="img/yz125x.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha YZ125X</a>
                    </div>
                <?php
            } elseif ($_GET['model'] == 'yz250x') {
                ?>
                    <img src="img/yz250x.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha YZ250X</a>
                    </div>
                <?php
            } elseif ($_GET['model'] == 'yz250f') {
                ?>
                    <img src="img/yz250f.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha YZ250F</a>
                    </div>
                <?php
            } else {
                ?>
                    <img src="img/yz250fx.png" class="img-fluid">
                    <div class="model-name">
                        <a>Yamaha YZ250FX</a>
                    </div>
                <?php
            }
        ?>
    </div>
</div>
<?php
    include('partials/header.php');
?>

<body>
    <div class="map">
        <div class="statusbar warning">
            <span><i class="warning sign icon"></i>Warning</span>
        </div>

        <div id="map-canvas" class="map-canvas"></div>

        <div class="message-box">
            <span class="warning">Pedestrian</span>
            <span class="subline">next cross on your left</span>
            <span class="distance">300<small>m</small></span>
        </div>
    </div>
</body>

<?php
    include('partials/footer.php');
?>
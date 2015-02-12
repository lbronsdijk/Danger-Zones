<?php
    include('partials/header.php');
?>

<body>
    <div class="map">
        <div class="statusbar dangerP">
            <span><i class="remove icon"></i>Danger</span>
        </div>

        <div id="map-canvas" class="map-canvas"></div>

        <div class="message-box">
            <span class="warning">Car crash</span>
            <span class="subline">next cross on your left</span>
            <span class="distance">1200<small>m</small></span>
        </div>
    </div>
</body>

<?php
    include('partials/footer.php');
?>
<?php
    include('partials/header.php');
?>

<body>
    <div class="map">
        <!--
        <div class="statusbar safe">
            <span><i class="checkmark icon"></i>Safe</span>
        </div>
        -->
<!--         <div class="statusbar warning">
            <span><i class="warning sign icon"></i>Warning</span>
        </div> -->
        <div class="statusbar warning">
            <span><i class="remove icon"></i>Warning</span>
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
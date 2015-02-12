<?php
    include('partials/header.php');
?>
<body>
    <div class="splashscreen">
        <div class="container">
            <div class="ui one column centered grid">
                <div class="ui center aligned column">
                    <div class="row">
                        <h1 class="logo">Danger Zones</h1>
                    </div>
                    <div class="row alcohol-check">
                        <h2>Alcohol Check</h2>
                        <h3 class="question">Are you drunk?</h3>
                        <div class="ui form">
                            <div class="field">
                                <input type="text" placeholder="Yes or no">
                            </div>
                        </div>
                        <a href="map.php" class="ui button submit">
                            <i class="angle right icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include('partials/footer.php');
?>
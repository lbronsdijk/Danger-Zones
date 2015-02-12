<?php
    include('partials/header.php');
?>

<body>
    <div class="map">
        <div class="statusbar safe">
            <span><i class="checkmark icon"></i>Safe</span>
        </div>
    
        <div id="map-canvas" class="map-canvas"></div>

        <div class="message-box small">
            <a href="#" class="report"><i class="add circle icon"></i></a>
            <a href="#" class="videos"><i class="photo icon"></i></a>
        </div>
    </div>
    <div class="ui basic modal report-modal">
        <i class="close icon"></i>
        <div class="header">
            Report traffic issue
        </div>
        <div class="content">
            <div class="description">
                <p>Help other roads user being paying attention. Please give us some information about the traffic issue.</p>
            </div>
        </div>
        <div class="ui inverted form">
            <div class="field">
                <select class="ui dropdown issue-type">
                    <option value="">Issue type</option>
                    <option value="1">Car crash</option>
                    <option value="2">Pedestrian</option>
                    <option value="3">Drunkenness</option>
                    <option value="3">Suicide</option>
                </select>
            </div>
            <div class="field">
                <textarea>Give us some info about the situation</textarea>
            </div>
            <div class="field">
                <label for="attachmentName" class="ui inverted red button">
                     <i class="photo icon"></i>
                     <input type="file" id="attachmentName" name="attachmentName" style="display: none">
                </label>
            </div>  
        </div>
        <div class="actions">
            <div class="two fluid ui inverted buttons">
                <div class="ui red basic inverted button">
                    <i class="remove icon"></i>
                    Cancel
                </div>
                <div class="ui green basic inverted button">
                    <i class="checkmark icon"></i>
                    Report
                </div>
            </div>
        </div>
    </div>
</body>

<?php
    include('partials/footer.php');
?>
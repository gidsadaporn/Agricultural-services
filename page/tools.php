<?php 
$title = 'เครื่องมือ'; include("top.php"); require_once('cal.php')
?>

<style>
.col-centered{
    float: none;
    margin: 0 auto;
}

.col-left{
    float: right
}

.text{
    font-size: 20px;
}

</style>


<div class="row">
    
    <div class="col-lg-3" style="padding-right: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <IFRAME allowtransparency="true" style="background: #FFFFFF;" height="550" width="100%" frameborder="0" SRC="https://www.bangchak.co.th/th/OilPriceWidget"></IFRAME>
            </div>
        </div>
    </div>
    <div class="col-lg-9" style="padding-left: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <a class="weatherwidget-io" href="https://forecast7.com/en/16d43102d82/khon-kaen/" data-label_1="KHON KAEN" data-label_2="WEATHER" data-theme="original" >KHON KAEN WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>

            <div class="col-lg-12">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=khonkaen&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:450px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div>
            </div>
        </div>
        
    </div>

    
</div>


<?php include("bottom.php");?>
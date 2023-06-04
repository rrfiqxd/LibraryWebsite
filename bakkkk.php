<div id="progress">
    <span id="progress-value">&#x1F815;</span>
</div>
#preloader{
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background: url("img/C loader.gif") 50% no-repeat #fff;
}
<div id="preloader">
</div>
<script type="text/javascript">
     $(window).load(function() {$("#preloader").delay(2000).fadeOut("slow"); })
</script>
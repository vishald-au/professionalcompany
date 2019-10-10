<?php
    $title="";
    include("header.php");
?>
<style>
body {
    background: rgba(128,189,246,1);
    background: -moz-linear-gradient(left, rgba(128,189,246,1) 0%, rgba(99,163,223,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(128,189,246,1)), color-stop(100%, rgba(99,163,223,1)));
    background: -webkit-linear-gradient(left, rgba(128,189,246,1) 0%, rgba(99,163,223,1) 100%);
    background: -o-linear-gradient(left, rgba(128,189,246,1) 0%, rgba(99,163,223,1) 100%);
    background: -ms-linear-gradient(left, rgba(128,189,246,1) 0%, rgba(99,163,223,1) 100%);
    background: linear-gradient(to right, rgba(128,189,246,1) 0%, rgba(99,163,223,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80bdf6', endColorstr='#63a3df', GradientType=1 );
}
</style>
<div class="row banner innerpage">
    <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
         
    </div>
</div>
 

 
<div class="row footer">
    <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
         <div class="col-sm-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-0">
            <h2>Free Estimate</h2>
            <?php include("admin-form-dropdown.php") ?>
        </div>

<?php include("footer.php") ?>
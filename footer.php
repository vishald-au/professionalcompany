
        <div class="col-sm-12 text-right">
            <ul class="footer-menu">
                <li><a href="index.php">Home</a> | </li>
                <li><a href="who-we-are.php">Who we are</a> | </li>
                <li><a href="what-we-do.php">What we do</a> | </li>
                <li><a href="estimate.php">Free Estimate</a> | </li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-sm-12 text-right">
            <p>Copyright <span id="year">2019</span> © professionalmovers.biz</p>
        </div>
    </div>
</div>
<div class="mobile-menu">
    <span id="cl"><i class="far fa-window-close"></i></span>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="who-we-are.php">Who we are</a></li>
        <li><a href="what-we-do.php">What we do</a></li>
        <li><a href="estimate.php">Free Estimate</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
</div>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script>
    $("#mm").click(function(){
      $(".mobile-menu").toggleClass("show");
    });
    $("#cl").click(function(){
      $(".mobile-menu").toggleClass("show");
    });
</script>
</body>
</html>
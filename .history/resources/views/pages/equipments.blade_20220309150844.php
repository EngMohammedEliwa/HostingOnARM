<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Equipments Metal Recycling CO. LTD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="  Metal Recycling CO. LTD">
<meta name="Keywords" content="  Metal Recycling CO. LTD">
<link rel="shortcut icon" href="images/favicon.png">
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/img-eff.css" >
<link rel="stylesheet" href="assets/style10.css" >
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="assets/equipments.css" >



<h1 style="display:none">Equipments Metal Recycling CO. LTD</h1>

</head>


<body>

    @include('headre\header')
    <section class="header clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 logo-section">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="ARM Metal Recycling CO.">
                        </a>

                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 menu-cntnr pos_1">


      <div class="menu-open"><img src="images/menu.png"/></div>
                <div class="menu">

          <ul>
            <li><a  href="index.html">Home </a></li>
            <li><a  href="about.html">About </a></li>
            <li><a  href="services.html">Services </a></li>
            <li><a  href="products.html">Products</a></li>
            <li><a class="current"  href="equipments.html">Equipments</a></li>
            <li><a href="image-gallery.html">Media</a></li>
            <li class="menu-contact"><a href="contact.html">Contact Us</a></li>
            <li><div class="close">Close Menu</div></li>
          </ul>

                </div>

                </div>

                <div class="col off">
                        <div class="contact-btn">
                            <a href="contact.html" class="btn btn-blue">Contact Us <i class="demo-icon icon-right-open">&#xf006;</i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-title" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                                <h1>Equipments</h1>
            </div>
        </div>
    </div>
    </div>

    <section class="services-sec-two">
        <div class="container">
    <h2>Modern Equipents & Eficient employees</h2>
    <p>We purchase scrap steel materials both local and overseas. We use heavy equipment’s, machineries and manual labor to sort the scrap into various metals classifications and produce recycled scrap metal products so it can be used to manufacture new metal products</p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row services-boxes">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_13.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_15.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_17.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_26.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_24.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Product</h2>
                           <p>Product of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer\footer2')

<script src="assets/js/min.js"></script>
<script src="assets/owl/owl.carousel.min.js"></script>
<script>

    $(document).ready(function() {
	  $("#clients").owlCarousel({
        autoPlay: 2000,
        items : 5,
		slideSpeed : 2000,
        itemsDesktop : [1000,4], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,4], // betweem 900px and 601px
        itemsTablet: [600,3], //2 items between 600 and 0
      });



    });

$('.menu-open').click(function(){
  $('.menu').slideDown("slow");
  $('.menu').css("display", "block");
});

$('.close').click(function(){
  $('.menu').slideUp();
});
document.getElementById("Equipments").classList.add("current");
</script>

</body>
 </html>

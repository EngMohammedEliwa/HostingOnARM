<!doctype html>
<html>

<!-- Mirrored from metalsrecyclingco.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 13:03:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Contact  ARM Metal Recycling CO.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="  ARM Metal Recycling CO.">
<meta name="Keywords" content="  ARM Metal Recycling CO.">
<link rel="shortcut icon" href="images/logo.png" type = 'image/png'>
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/contact.css" >
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="css/contact.css" >

<h1 style="display:none">Contact  ARM Metal Recycling CO.</h1>

</head>


<body>

    @include('headre\header')
    <div class="page-title" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    </div>



    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>How we can help You?</h1>
                    <p>Whether you want to find out more about a trip or just want a helping hand, you can always get us online or over the phone.</p>
                </div>

                <div class="col-md-4">
                    <h3>Al-Rukn
                        Sharjah
                        United Arab Emirates</h3>
                    <p>P.O. Box 95911,<br> Industrial Area 12,<br> Sharjah – UAE</p>
                </div>

                <div class="col-md-5">
                    <h3>Mail Us</h3>
                    <p>ammar@alruknmetal.com</br>info@alruknmetal.com</p>
                </div>

                <div class="col-md-3">
                    <h3>Call Us</h3>
                    <p>+971 56 411 3933</br>+971 6 535 9604 </p>
                </div>
            </div>


            <div class="row map-form">

                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Uvp9Uv622yJ4TgTs5pLfz2TwU9I" width="100%" height="450"></iframe>
                </div>

                <div class="col-md-6">
                    <div class="form">
                        <h2>Get in Touch</h2>
                        <form method="POST" action="{{ route('contact1') }}">
                            @csrf

                            <div class="flex_row"><label class="lab_1" for="name">Full Name : </label><input class="input_1" type="text" name="name" placeholder="Enter Your Name"/></div>
                            <div class="flex_row"><label class="lab_1" for="email">Email : </label><input class="input_1" type="email" name="email" placeholder="Enter email address"/></div>
                            <div class="flex_row"><label class="lab_1" for="mob">Contact Number : </label><input class="input_1" type="number" placeholder="Enter your number" name="Phone" required/></div>
                            <div class="flex_row"><label class="lab_1" for="msg">Message : </label><textarea  class="input_2" name="msg" placeholder="Your Message.."></textarea></div>


                            <button name="sub" class="btn btn-blue">Send<i class="demo-icon icon-right-open">&#xf006;</i> </button>

                        </form>
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
        itemsDesktop : [1000,4],
        itemsDesktopSmall : [900,4],
        itemsTablet: [600,3],
      });



    });

$('.menu-open').click(function(){
  $('.menu').slideDown("slow");
  $('.menu').css("display", "block");
});

$('.close').click(function(){
  $('.menu').slideUp();
});
document.getElementById("Home").classList.add("current");
</script>

</body>
 </html>

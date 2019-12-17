<?php
include "db.php";
include "header.php";
?>

<!-- Banner Area Starts -->
<section class="banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>the most interesting food in the world</h6>
                <h1>Discover the <span class="prime-color">flavors</span><br>
                    <span class="style-change">of <span class="prime-color">food</span>Time</span></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<div>

</div>
<!-- Contact Form Starts -->
<section class="contact-form mb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="info-text">
                        <h5>Bangladesh,CTG</h5>
                        <small>GEC circle</small>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-text">
                        <h5>+8801672- 02 49 95</h5>
                        <small>Mon to Fri 9am to 6 pm</small>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="info-text">
                        <h5>support@colorlib.com</h5>
                        <small>Send us your query anytime!</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="#">
                    <div class="left">
                        <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                        <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                        <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                    </div>
                    <div class="right">
                        <textarea name="message" cols="20" rows="7"  placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                    </div>
                    <button type="submit" class="template-btn">subscribe now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->
<?php
include "footer.php";
?>
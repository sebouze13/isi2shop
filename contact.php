<?php
$page_name = "Contact us";


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $to = 'percia.sebastien@gmail.com';
    $subject = 'the subject';
    $msg = ' Thank you for contacting us!!
  A specialist will contact you as soon as possible.<br/><br/>
  Your message : ' .
        $message;
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $msg, $headers);
    if(mail($to, $subject, $msg, $headers) == true){
        echo "<script type=\"text/javascript\">
                                alert (\"Your message has been sent successfully!\");
                                window.location = 'index.php';
                            </script>";
    }else{
        echo "<script type=\"text/javascript\">
                                error(\"Your message has been sent successfully!\")
                            </script>";
    }
}

?>

<?php
require_once  'views/header.php';
?>

<!-- Bread Crumb STRAT -->
<div class="banner inner-banner1 ">
    <div class="container">
        <section class="banner-detail  center-xs">
            <h1 class="banner-title">Contact</h1>
            <div class="bread-crumb right-side float-none-xs">
                <ul>
                    <li><a href="index.php">Home</a>/</li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- Bread Crumb END -->

<!-- CONTAIN START ptb-95-->
<section class="pt-70 client-main align-center">
    <div class="container">
        <div class="contact-info">
            <div class="row m-0">
                <div class="col-md-4 p-0">
                    <div class="contact-box">
                        <div class="contact-icon contact-phone-icon"></div>
                        <span><b>Tel</b></span>
                        <p>0123 456 789 / 0123 456 788</p>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="contact-box">
                        <div class="contact-icon contact-mail-icon"></div>
                        <span><b>Mail</b></span>
                        <p>infoservices@isi2shop.com </p>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="contact-box">
                        <div class="contact-icon contact-open-icon"></div>
                        <span><b>Open</b></span>
                        <p>Mon – Sat: 9:00 – 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading-part mb-30">
                    <h2 class="main_title  heading"><span>Leave a message!</span></h2>
                </div>
            </div>
        </div>
        <div class="main-form">
            <form action="" method="POST" name="contactform">
                <div class="row">
                    <div class="col-md-4 mb-30">
                        <input type="text" required placeholder="Name" name="name">
                    </div>
                    <div class="col-md-4 mb-30">
                        <input type="email" required placeholder="Email" name="email">
                    </div>
                    <div class="col-md-4 mb-30">
                        <input type="text" required placeholder="Website" name="website">
                    </div>
                    <div class="col-12 mb-30">
                        <textarea required placeholder="Message" rows="3" cols="30" name="message"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="align-center">
                            <button type="submit" name="submit" class="btn btn-color">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="pt-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map">
                    <div class="map-part">
                        <div id="map" class="map-inner-part"></div>
                    </div>
                    <div style="-webkit-filter: grayscale(100%);
              filter: grayscale(100%);">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11177.210969328822!2d-73.6407061!3d45.5442351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x647a6b6d7cb681a7!2sISI%2C+l&#39;Institut+sup%C3%A9rieur+d&#39;informatique!5e0!3m2!1sfr!2sca!4v1536629608425" width="100%" height="400" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->

<!-- News Letter Start -->
<section>
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-inner center-sm">
                <div class="row">
                    <div class=" col-xl-12 col-md-12">
                        <div class="newsletter-bg">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="newsletter-title">
                                        <h2 class="main_title">Subscribe to our newsletter</h2>
                                        <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form>
                                        <div class="newsletter-box">
                                            <input type="email" placeholder="Email Here...">
                                            <button title="Subscribe" class="btn-color">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Letter End -->

<!-- FOOTER START -->
<?php
require_once 'views/footer.php';
?>
<!-- FOOTER END -->

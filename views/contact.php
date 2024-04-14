
<!doctype html>
<html lang="en">
<head>
<title>Maxis Technologies Official Website</title>
<link rel="sty lesheet" type="text/css" href="assets/inc-css/responsive.css">
<meta name="description" content="Homepage Description"/>
<?php include_once("includes/head.php")?>
<link rel="stylesheet" type="text/css" href="assets/inc-css/home.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css.map">

<body class="contact_page">

<!-- header -->
<?php include_once("includes/header.php")?>
<!-- header end -->

<section class="contact_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact_hd_inner">
                    <ul>
                        <li><a href="/"><img src="assets/images/white_logo.png" alt=""></a></li>
                        <li class="mover"><img src="assets/images/vector.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact_inner">
                    <h2>WANNA CHAT OVER ?</h2>
                    <form action="/leads/" method="POST">
                        <div class="inner_form_contact">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="number" name="phone" placeholder="Phone Number" required>
                        </div>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="biref" placeholder="Project Details"></textarea>
                        <input type="submit" value="Lets Get Started">
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_side">
                    <div class="inner_sider">
                        <h2>GIve US A CAll?</h2>
                        <p><a href="tel:+18884835982">+1 (888) 483 5982</a></p>
                    </div>
                    <div class="inner_sider">
                        <h2>Write to us?</h2>
                        <p><a href="mailto:support@maxistechnologies.com">support@maxistechnologies.com</a></p>
                    </div>
                    <div class="inner_sider">
                        <h2>Come and see us!</h2>
                        <p><a href="https://goo.gl/maps/LEpWTYJaBwrsnp2L8" targe="_blank">1223 East 233rd St
Bronx, NY 10466</a></p>
                        <!-- <p><a href="https://goo.gl/maps/EvtHUpvqstNK7KtV8" targe="_blank">9300 N Milwaukee Ave , Niles, IL 60714</a></p>                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<?php include_once("includes/footer.php")?>

<style>
    section.contact_header{
        display: block !important;
    }
</style>
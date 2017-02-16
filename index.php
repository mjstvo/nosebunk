<?php
include('header.html');
?>

<!-- NAVBAR -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">

<!-- BRAND & TOGGLE ARE GROUPED FOR BETTER MOBILE DISPLAY -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><span class="fa fa-bookmark-o"></span>    nosebunk &reg;</a>
            </div>

<!-- NAV LINKS COLLECTED FOR TOGGLING -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Designs</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <hr class="star-light"><br />
                        <span class="name">nosebunk</span>
                        <h4><b>Street Apparel UK &reg;</b></h4>
                        <h4><i>- 2017 - </i></h4><br />
                        <hr class="star-light"><br /><br /><br />
                    </div>
                </div>
            </div>
        </div>
    </header>

 <!-- DESIGNS SECTION -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Designs</h2>
                    <hr class="star-primary">
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/tshirt1.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/hoodie1.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/longpolo.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- MODALS -->

    <!-- MODAL ONE -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Premier Stripe T-Shirt - White/Navy</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/tshirt1.png" class="img-responsive img-centered" alt="">
                            <p>The first in a range of Premium T-Shirt designs from <a href="index.php"><b>NOSEBUNK &reg;</b></a>. Featuring a White/Navy colourway. <br /><b>Sizes S - XL.</b></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL TWO --->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>'Straight Up' Pull-Over Hoodie - Faded Amber</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/hoodie1.png" class="img-responsive img-centered" alt="">
                            <p>A new Hoodie collection from <a href="index.php"><b>NOSEBUNK &reg;</b></a>, 'Straight Up'. Featuring a Faded Amber colourway with our Italicised cross-out Logo. <br /><b>Sizes S - XL.</b></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL THREE --->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Classic Long-Sleeved Polo Shirt - Walnut Beige</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/longpolo.png" class="img-responsive img-centered" alt="">
                            <p>Introducing 'Classics' collection. A series of casual apparel from <a href="index.php"><b> NOSEBUNK &reg;</b></a>. <br /><b>Sizes S - XL.</b></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ABOUT SECTION -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2>About Us</h2><br />
                    <h5><b>NOSEBUNK &reg;</b> is a fresh new Independant UK Clothing Brand which aims to intertwine different fashions of popular street apparel with the underground grit of modern skate culture.</h5>

                    <h5>We enforce a rule of faultlessness and delicacy not only in our designs but in the manufacture of all of our products,
                        and we strive to produce all of our apparel right here in the UK with use of the with help from local craftesmen and the very best, high quality materials available to us.</h5>
                </div>
            </div>
        </div>
    </section>

<!-- CONTACT SECTION -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Give Us A Shout</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" class="btn btn-default btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- FOOTER -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h2>Est.<br /></h2>
                        <h3 style="color: #ffdf43">- 2017 -</h3>
                        <h3 style="color:#FFFFFF;">Belfast, United Kingdom</h3>
                    </div>
                    <div class="footer-col col-md-6">
                        <h2>Catch Us On</h2>
                        <ul class="list-inline">
                            <li>
                                <a href="https://facebook.com/nosebunkapparel" class="btn-social btn-outline"><span class="fa fa-facebook fa-fw"></span></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/nosebunkapparel" class="btn-social btn-outline"><span class="fa fa-twitter fa-fw"></span></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/nosebunkapparel" class="btn-social btn-outline"><span class="fa fa-instagram fa-fw"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6>Copyright &copy; 2017<br />
                            <b>www.nosebunk.com</b></h6></b>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php
include('footer.html');
?>

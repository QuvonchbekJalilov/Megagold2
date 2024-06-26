<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main2>
    <section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>

                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-5">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><i class="icon fa fas fa-plus"></i> <span class="btn-title">Send message</span></button>
                            <button type="reset" class="theme-btn btn-style-one ml-25"><i class="icon fa fas fa-plus"></i> <span class="btn-title">Reset</span></button>
                        </div>
                    </form>

                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur
                                notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Have any question?</h6>
                                    <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Write email</h6>
                                    <a href="/cdn-cgi/l/email-protection#aec0cbcbcac6cbc2deeecdc1c3decfc0d780cdc1c3"><span class="__cf_email__" data-cfemail="d0beb5b5b4b8b5bca090b3bfbda0b1bea9feb3bfbd">[email&#160;protected]</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Visit anytime</h6>
                                    <span>66 broklyn golden street. New York</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="map-section py-0">
        <iframe class="map w-100" src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe>
    </section>
</x-layouts.main2>
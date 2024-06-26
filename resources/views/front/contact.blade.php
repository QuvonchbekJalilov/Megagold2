<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main2>
    <section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">{{__('words.contact')}}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">{{__('words.home')}}</a></li>
                    <li>{{__('words.contact')}}</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">{{__('words.send')}} </span>
                        <h2>{{__('words.feelFree')}}</h2>
                    </div>

                    <form id="contact_form" name="contact_form" class="" action="javascript:sendMessage();" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" id="name" type="text" placeholder="{{__('words.enterName')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" id="phone_number" class="form-control required email" type="text" placeholder="{{__('words.enterPhone')}}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea name="form_message" id="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-5">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><i class="icon fa fas fa-plus"></i> <span class="btn-title">{{__('words.send')}}</span></button>
                        </div>
                    </form>

                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">{{__('words.needHelp')}}</span>
                            <h2>{{__('words.getInTouch')}}</h2>

                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">{{__('words.haveQue')}}</h6>
                                    <a href="tel:+998998405555"><span>Free</span> +9998 99 840 55 55</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">{{__('words.writeEmail')}}</h6>
                                    <a href="mailto:info@megagold.uz"><span class="__cf_email__" data-cfemail="d0beb5b5b4b8b5bca090b3bfbda0b1bea9feb3bfbd">info@megagold.uz</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">{{__('words.wisitAnyTime')}}</h6>
                                    <span>Ташкент, ул. Катта халка йули, 5</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="map-section py-0">
        <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187.30656507751664!2d69.15080539485751!3d41.31092934514042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8925e336a4b3%3A0xf0553ded8374a12a!2sDimax%20Sanoat%20Savdo%20Markazi!5e0!3m2!1sen!2s!4v1719411587033!5m2!1sen!2s"></iframe>
    </section>
    <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const phoneNumber = document.getElementById('phone_number').value;
            const message = document.getElementById('message').value;

            if (!name || !phoneNumber || !message) {
                alert('Please fill all fields.');
                return;
            }

            const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY';
            const telegramChatId = '-4236704302';
            const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

            const data = {
                chat_id: telegramChatId,
                text: `Yangi Habar:\n\nIsm: ${name}\nTelefon: ${phoneNumber}\nHabar: ${message}`
            };

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        alert("Habar Jo'natildi!");
                        document.getElementById('contact_form').reset();
                    } else {
                        alert('Xatolik yuz berdi qayta urunib koring.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Xatolik yuz berdi qayta urunib koring.');
                });
        }
    </script>
</x-layouts.main2>
<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

?>

<x-layouts.main>
<style>
        .w-94 {
            width: 94%;
        }

        .aaa {
            padding: 2px 10px !important;
            border: 1px solid black;
            border-radius: 8px;
        }

        .pricing_area {
            position: relative !important;
        }

        .productPrice{
            font-size: 30px !important;
            color: #ff7300
        }

        .form-control:focus {
            border-color:  #ff7300; /* Change border color */
            box-shadow: rgba(255,115,0) 0px 4px 8px -2px, rgba(255,115,0) 0px 0px 0px 1px;
        }

        .btn{
            color: white;
            background-color: #ff7300;
            border-color: #ff7300;
        }

        .btn:hover{
            color: #ff7300;
            background-color: white;
            border-color: #ff7300;
        }

        .form-label{
            font-weight:700;
        }

        .scrl {
            margin-top: 10px;
            border-radius: 8px;
            padding: 10px 20px;
            position: absolute !important;
            top: 0;
            bottom: 0;
            border: 0;
            width: 300px;
            background-color: #fff;
            overflow-y: auto;
            z-index: 999;
        }

        .single_price:hover{
            background-color: #ff7300 !important;
        }
        .single_price:hover .category{
            color: #ff7300 !important;
            border-color: #ff7300 !important;
        }

        .single_price:hover .aaa{
            border-color: white;
        }

        .single_price:hover .cmn_btn{
            color: #ff7300 !important;
        }

        .li:hover{
            color:#ff7300 !important;
            transition: 0.1s !important;
        }

        .li{
            font-weight:700;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .scrl {
                position: relative !important;
                width: 100%;
                margin-bottom: 20px;
                display: block;
            }

            .scrl h3 {
                text-align: center;
            }

            .scrl a {
                display: block;
                text-align: center;
                margin: 10px 0;
            }
        }
    </style>
<div class="breadcrumb_area">
    <div class="breadcrumb-shapes">
        <img class="shape_01 position-absolute" src="/assets/img/slide/sl-1.png" alt="shape_01">
        <img class="shape_02 position-absolute" src="/assets/img/slide/sl-2.png" alt="shape_02">
        <img class="shape_03 position-absolute" src="/assets/img/slide/sl-3.png" alt="shape_03">
        <img class="shape_04 position-absolute" src="/assets/img/slide/sl-4.png" alt="shape_04">
        <img class="shape_05 position-absolute" src="/assets/img/slide/sl-5.png" alt="shape_05">
        <img class="shape_06 position-absolute" src="/assets/img/slide/sl-6.png" alt="shape_06">
        <img class="shape_07 position-absolute" src="/assets/img/slide/sl-7.png" alt="shape_07">
        <img class="bc-01 position-absolute" src="/assets/img/about/breadcrumb/bread.png" alt="shape_07">
        <img class="shape_10 position-absolute" src="/assets/img/shapes/header_left.png" alt="shape_10">
        <img class="shape_11 position-absolute" src="/assets/img/shapes/header_middle.png" alt="shape_11">
    </div>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_content">
                    <h3>{{__('words.category')}}: {{$category['name_'.$lang]}}</h3>
                    <ul>

                        <li><a href="{{ route('index')}}">{{__('words.home')}}<i class="far fa-chevron-right"></i></a></li>
                        <li><a href="{{ route('product')}}">{{__('words.category')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb_area end  -->

<div class="pricing_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="row mt-2">
                  <div class="col-md-5 col-lg-3">
                    <div class="cmn_widget category">
                        <h4 class='category'>{{__('words.category')}}</h4>
                        <ul>
                        @foreach ($categories as $category)
                            <li class='li'><a href="{{ route('products', ['product' => $category->id])}}">{{ $category['name_'.$lang]}}</a><span class="text-end"><i class="far fa-chevron-right"></i></span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-12 order-md-2 order-2">
                    @foreach ($products as $product)
                    <div class="single_price d-flex wow animate__fadeIn shadow" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                        <div class="price_img">
                            <img src="/storage/{{ $product->category->photo}}" style="height: 200px;" alt="">
                            <div class="price">
                                <p class='category' >{{ $product->{'name_'.$lang} }}</p>
                            </div>
                        </div>
                        <div class="price_content">
                            <h4>{{ $product->price / 1000000 }} mln</h4>
                            <div>
                                <div class="mt-2 justify-content-between d-flex">
                                    <div class="row justify-content-between">
                                        <div class="col-md-6">
                                            <p class="aaa">Size: {{ $product->size }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="aaa">Metr - Tonna: {{ $product->metr_tonna }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="aaa">Tonna - Metr: {{ $product->tonna_metr }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="aaa">Manufacturer: {{ $product->manufacturer }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choose_plan">
                            <button class="cmn_btn increase_width cmn_outline effect" onclick='xarid({{ $product->id }})' type="button" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                                <span>{{__('words.buy')}}</span>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" style="margin-top: 90px;" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="padding:10px; border-radius:1.3rem;">
            <div class="modal-header">
                <h3 id="productName" class='m-0 fw-bold '></h3>
                <h5 class="modal-title" id="purchaseModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="productPrice" class='productPrice'></p>
                <form id="purchaseForm" action="{{ route('orders.store')}}" method="post" onsubmit="return confirm('Maxsulotni o\'zlashtirishga ruxsat berasizmi')">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="product_id" id="productId">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">{{__('words.fullName')}}</label>
                                <input type="text" name="name" class="form-control" id="fullName" placeholder="{{__('words.placeholderName')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">{{__('words.phone')}}</label>
                                <input type="text" class="form-control" name="phone_number" id="phoneNumber" required placeholder="+998" :value="+998">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="weight" class="form-label">{{__('words.weight')}} (kg):</label>
                                <input type="text" class="form-control" name="total_weight" id="weight" placeholder="{{__('words.placeholderWeight')}}" oninput="calculateFromWeight()" required>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="weight" disabled class="form-label">{{__('words.lenght')}} (Metr):</label>
                                <input type="text" class="form-control" name="total_length" id="length" placeholder="{{__('words.placeholderLenght')}}" oninput="calculateFromLength()" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">{{__('words.cost')}} (UZS):</label>
                       <input type="text" class="form-control" name="total_price" id="price" placeholder="" readonly required>

                    </div>
                    <div class="mt-4 text-center" style="display:none;">
                        <textarea id="result" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" onclick="sendOrderInfo()" class="btn btn-primary mt-3">{{__('words.submit')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function sendOrderInfo() {
        const fullName = document.getElementById('fullName').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const weight = document.getElementById('weight').value;
        const length = document.getElementById('length').value;
        const price = document.getElementById('price').value;
        const productName = document.getElementById('productName').innerText;

        if (!fullName || !phoneNumber || !weight || !length || !price) {
            alert('Iltimos, barcha maydonlarni to\'ldiring.');
            return;
        }

        const message = `Buyurtma Yaratildi:\n\nMahsulot nomi: ${productName}\nXaridor ismi: ${fullName}\nTelefon Raqam: ${phoneNumber}\nKilogram: ${weight} kg\nUzunligi: ${length} m\nPrice: ${price} so'm`;
        const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY';
        const telegramChatId = '-4236704302';

        const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
        const data = {
            chat_id: telegramChatId,
            text: message
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
                    alert('Xabar yuborildi!');
                    document.getElementById('fullName').value = '';
                    document.getElementById('phoneNumber').value = '';
                    document.getElementById('weight').value = '';
                    document.getElementById('length').value = '';
                    document.getElementById('price').value = '';
                } else {
                    alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                }
            })
            .catch(error => {
                console.error('Xatolik:', error);
                alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
            });
    }

    const products = @json($products);
    console.log(products);
    let currentProductPrice = 0;
    let metr_tonna = 0;
    let tonna_metr = 0;
    let weightPerMeter = 0;

    function xarid(productId) {

        const product = products.find(p => BigInt(p.id) === BigInt(productId));

        console.log(typeof product.id);
        if (!product) {
            console.error('Product not found:', productId);
            return;
        }
        

        document.getElementById('fullName').value = '';
        document.getElementById('phoneNumber').value = '';
        document.getElementById('length').value = '';
        document.getElementById('weight').value = '';
        document.getElementById('price').value = '';
        document.getElementById('result').value = '';

        document.getElementById('productId').value = productId;
        document.getElementById('productName').innerText = product.name_uz;
        document.getElementById('productPrice').innerText = "{{__("words.perTonna")}}: " + product.price;

        currentProductPrice = product.price;
        metr_tonna = product.metr_tonna;
        tonna_metr = product.tonna_metr;
        console.log(tonna_metr);
        console.log(metr_tonna);

        // Calculate weight per meter based on the database values
        weightPerMeter = metr_tonna;
    }

    function calculateFromLength() {
        const length = parseFloat(document.getElementById('length').value);
        const weightInput = document.getElementById('weight');
        const priceInput = document.getElementById('price');
        const resultDiv = document.getElementById('result');

        if (isNaN(length) || length <= 0 || weightPerMeter === 0) {
            weightInput.value = '';
            priceInput.value = '';
            resultDiv.value = 'Iltimos, to\'g\'ri uzunlik qiymatini kiriting.';
            return;
        }

        const totalWeight = length * weightPerMeter;
        const totalPrice = totalWeight * currentProductPrice / 1000;
        const formattedPrice = totalPrice.toLocaleString('uz-UZ', {
            style: 'currency',
            currency: 'UZS'
        });


        weightInput.value = totalWeight;
        priceInput.value = formattedPrice;
        resultDiv.value = `Umumiy vazn: ${totalWeight.toFixed(2)} kg\nUmumiy narx: ${totalPrice} so'm`;
        console.log(`Calculated from Length: ${length}m, Weight: ${totalWeight}kg, Price: ${totalPrice}so'm`);
    }

    function calculateFromWeight() {
        const weight = parseFloat(document.getElementById('weight').value);
        const lengthInput = document.getElementById('length');
        const priceInput = document.getElementById('price');
        const resultDiv = document.getElementById('result');

        if (isNaN(weight) || weight <= 0 || weightPerMeter === 0) {
            lengthInput.value = '';
            priceInput.value = '';
            resultDiv.value = 'Iltimos, to\'g\'ri vazn qiymatini kiriting.';
            return;
        }

        const totalLength = weight / weightPerMeter;
        const totalPrice = weight * currentProductPrice / 1000;
        const formattedPrice = totalPrice.toLocaleString('uz-UZ', {
            style: 'currency',
            currency: 'UZS'
        });
        console.log(formattedPrice);

        lengthInput.value = totalLength.toFixed(2);
        priceInput.value = formattedPrice;
        resultDiv.value = `Umumiy uzunlik: ${totalLength.toFixed(2)} metr\nUmumiy narx: ${formattedPrice} so'm`;

        console.log(`Calculated from Weight: ${weight}kg, Length: ${totalLength}m, Price: ${formattedPrice}so'm`);
    }

    function calculateFromPrice() {
        const price = parseFloat(document.getElementById('price').value);
        const lengthInput = document.getElementById('length');
        const weightInput = document.getElementById('weight');
        const resultDiv = document.getElementById('result');

        if (isNaN(price) || price <= 0 || currentProductPrice === 0) {
            lengthInput.value = '';
            weightInput.value = '';
            resultDiv.value = 'Iltimos, to\'g\'ri narx qiymatini kiriting.';
            return;
        }

        // const totalWeight = price / currentProductPrice;
        const totalLength = weightPerMeter > 0 ? totalWeight / weightPerMeter : 0;

        weightInput.value = totalWeight.toFixed(2);
        lengthInput.value = totalLength.toFixed(2);
        resultDiv.value = `Umumiy vazn: ${totalWeight.toFixed(2)} kg\nUmumiy uzunlik: ${totalLength.toFixed(2)} metr`;
        console.log(`Calculated from Price: ${price}so'm, Weight: ${totalWeight}kg, Length: ${totalLength}m`);
    }
</script>


<!-- footer area start  -->
<div class="footer_area pt-120 pb-50">
    <div class="footer_shape">
        <img src="/assets/img/footer/footerPattern.png" class="f-shape_one" alt="">
        <img src="/assets/img/footer/polygonFooter.png" class="f-shape_two" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5 col-sm-7 ">
                <div class="footer_widget">
                    <h4>{{ __('words.about')}}</h4>
                        <p>{{ __('words.footerAbout') }}</p>
                    <div class="social_contact">
                        @foreach($contacts as $contact)
                        <a href="{{ $contact->email }}"><svg width="20.87" height="15">
                                <g id="Mail_2" data-name="Mail 2" transform="translate(-163.667 -153.91)">
                                    <path id="dfdf" data-name="Path 22" d="M181.928,153.91H166.276a2.611,2.611,0,0,0-2.609,2.609V166.3a2.611,2.611,0,0,0,2.609,2.609h15.652a2.612,2.612,0,0,0,2.609-2.609v-9.783A2.612,2.612,0,0,0,181.928,153.91Zm1.3,12.391a1.306,1.306,0,0,1-1.3,1.3H166.276a1.306,1.306,0,0,1-1.3-1.3v-9.783a1.306,1.306,0,0,1,1.3-1.3h15.652a1.306,1.306,0,0,1,1.3,1.3Z" fill="#438ff9" />
                                    <path id="dfdeyyf" data-name="Path 23" d="M183.172,159.149a.653.653,0,0,0-.918-.092l-6.76,5.532-6.761-5.532a.652.652,0,0,0-.826,1.01l7.174,5.87a.653.653,0,0,0,.826,0l7.174-5.87A.653.653,0,0,0,183.172,159.149Z" transform="translate(-1.391 -1.739)" fill="#438ff9" />
                                    <path id="sdfs" data-name="Path 24" d="M186.78,167.1a.652.652,0,1,0-.922.922l2.609,2.609a.652.652,0,0,0,.922-.922Z" transform="translate(-7.652 -4.522)" fill="#438ff9" />
                                    <path id="Path_25" data-name="Path 25" d="M170.467,167.1l-2.609,2.609a.652.652,0,1,0,.922.922l2.609-2.609a.652.652,0,1,0-.922-.922Z" transform="translate(-1.391 -4.522)" fill="#438ff9" />
                                </g>
                            </svg>
                            {{ $contact->email }}</a>
                        <a href="tel:{{ $contact->phone_number }}"><svg width="17.224" height="17.224" viewBox="0 0 17.224 17.224">
                                <g id="dfde" transform="translate(-255.083 -150.41)">
                                    <path id="dfd" data-name="Path 26" d="M279.005,158.071a14.427,14.427,0,0,0-7.655-7.618.551.551,0,0,0-.726.316.581.581,0,0,0,.307.749,13.3,13.3,0,0,1,7.058,7.024.557.557,0,0,0,.508.339.537.537,0,0,0,.228-.051A.582.582,0,0,0,279.005,158.071Z" transform="translate(-6.747 0)" fill="#438ff9" />
                                    <path id="dfdplgw" data-name="Path 27" d="M270.42,156.979a8.059,8.059,0,0,1,4.281,4.251.538.538,0,0,0,.492.328.52.52,0,0,0,.22-.049.561.561,0,0,0,.271-.733,9.149,9.149,0,0,0-4.858-4.825.534.534,0,0,0-.7.306A.561.561,0,0,0,270.42,156.979Z" transform="translate(-6.529 -2.394)" fill="#438ff9" />
                                    <path id="fpokmd" data-name="Path 28" d="M269.332,161.508a1.314,1.314,0,0,0-1.985,0c-.464.46-.928.921-1.385,1.389a.315.315,0,0,1-.222.119.324.324,0,0,1-.159-.049c-.3-.164-.621-.3-.909-.476a14.4,14.4,0,0,1-3.471-3.159,8.242,8.242,0,0,1-1.244-1.993.286.286,0,0,1,.07-.367c.464-.448.917-.909,1.373-1.369a1.318,1.318,0,0,0,0-2.032c-.363-.367-.726-.725-1.088-1.092s-.745-.753-1.123-1.124a1.322,1.322,0,0,0-1.985,0c-.468.46-.917.932-1.393,1.384a2.262,2.262,0,0,0-.71,1.525,6.455,6.455,0,0,0,.5,2.781,16.893,16.893,0,0,0,3,5,18.558,18.558,0,0,0,6.147,4.809,8.889,8.889,0,0,0,3.4.991c.074,0,.147.006.219.006a2.433,2.433,0,0,0,1.923-.821c.4-.445.846-.85,1.267-1.275a1.327,1.327,0,0,0,.008-2.021Q270.451,162.618,269.332,161.508Zm1.421,3.452c-.139.14-.281.278-.424.416-.293.285-.6.579-.884.9a1.314,1.314,0,0,1-1.08.444c-.051,0-.1,0-.157,0a7.671,7.671,0,0,1-2.972-.879,17.514,17.514,0,0,1-5.776-4.52,15.7,15.7,0,0,1-2.806-4.666,5.308,5.308,0,0,1-.431-2.295,1.141,1.141,0,0,1,.362-.8c.294-.279.578-.565.862-.852.18-.182.361-.365.546-.547a.223.223,0,0,1,.4,0c.249.244.494.491.739.738l.372.373c.185.187.369.372.554.556s.356.356.536.538c.208.209.2.246,0,.44l-.19.192c-.387.39-.771.779-1.179,1.174a1.407,1.407,0,0,0-.313,1.6,9.214,9.214,0,0,0,1.41,2.269,15.454,15.454,0,0,0,3.75,3.4c.222.138.447.248.644.346.108.053.215.105.3.154a1.442,1.442,0,0,0,.716.2,1.414,1.414,0,0,0,1.031-.46c.446-.457.9-.908,1.372-1.376a.217.217,0,0,1,.392,0q1.116,1.11,2.226,2.222C270.933,164.7,270.951,164.76,270.753,164.961Z" transform="translate(0 -0.218)" fill="#438ff9" />
                                </g>
                            </svg>
                            {{ $contact->phone_number }}</a>
                        @endforeach
                    </div>
                    @foreach($links as $link)
                    <div class="social_link pt-25">
                        <ul>
                            <li><a href="{{ $link->telegram }}"><i class="fab fa-telegram icon"></i></a></li>
                            <li><a href="{{ $link->facebook }}"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="{{ $link->twitter }}"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="{{ $link->instagram }}"><i class="fab fa-instagram icon"></i></a></li>
                            <li><a href="{{ $link->youtube }}"><i class="fab fa-youtube icon"></i></a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                <div class="widget_two">
                    <h4>{{__('words.usefull')}} {{__('words.links')}}</h4>
                    <ul>
                        <li><a href="/"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfdfd" data-name="dfdfd" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                {{__('words.home')}}</a></li>
                        <li><a href="/about"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="dfdfa" data-name="ojkj" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                {{__('words.about')}}</a></li>
                        <li><a href="{{ route('product')}}"><svg width="7.514" height="11.563">
                                    <path id="poek" data-name="dfdsr" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                {{ __('words.product') }}</a></li>
                        <li><a href="/blog"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                    <path id="pkks" data-name="dfkkij" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                </svg>
                                {{__('words.blog')}}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-lg-3 justify-content-end">
                <h4>{{__('words.contact')}}</h4>
                <div class="input-group mt-4 align-items-center">
                    <input type="text" id="last_name" class="form-control" required placeholder="{{__('words.name')}}">
                </div>
                <div class="input-group mt-3 align-items-center">
                    <input type="text" id="phone_number_footer" required class="form-control" placeholder="+998" value="+998">
                </div>
                <div class="input-group mt-3">
                    <button type="submit" onclick="sendphone()" style="background: #438FF9; color: white;" class="form-control">{{__('words.send')}}</button>
                </div>
            </div>

            <script>
                function sendphone() {
                    const phone_number_footer = document.getElementById('phone_number_footer').value;
                    const last_name = document.getElementById('last_name').value;

                    if (!last_name || !phone_number_footer) {
                        alert('Iltimos, barcha maydonlarni to\'ldiring.');
                        return;
                    }

                    const message = `Habar Yuborildi:\n\nIsm: ${last_name}\nTelefon Raqam: ${phone_number_footer}`;
                    const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Bu yerga o'zingizning bot tokeningizni qo'ying
                    const telegramChatId = '6583641407'; // Bu yerga o'zingizning chat ID ni qo'ying

                    const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
                    const data = {
                        chat_id: telegramChatId,
                        text: message
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
                                alert('Xabar yuborildi!');
                                document.getElementById('last_name').value = '';
                                document.getElementById('phone_number_footer').value = '';
                            } else {
                                alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                            }
                        })
                        .catch(error => {
                            console.error('Xatolik:', error);
                            alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                        });
                }
            </script>
        </div>
    </div>
</div>
<!-- footer area end  -->

<!-- copyright section  -->
<div class="copyright_area">
    <div class="container">
        <div class="row top-border align-items-center">
            <div class="col-md-4 col-lg-2 col-xl-4  col-sm-6">
                <div class="logo">
                    <a href="/"><img src="/assets/img/MegaGoldMetall2-01.png" alt="site_logo"></a>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-4 col-sm-6 text-center">
                <div class="copyright_text">
                    <p>&copy; 2024 Megagold.uz by <a href="https://dora.uz"><span>DORA</span></a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 text-end d-none d-xl-block">
                <div class="copyright_menu">
                    <ul>
                        <li><a href="tel:+998979066666">+998 (97) 906 66 66</a></li>
                        <li><a href="tel:+998998405555">+998 (99) 840 55 55</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</x-layouts.main>
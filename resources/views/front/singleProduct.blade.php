<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>
<style>
    .single_price {
        background-color: #2d2b3e !important;
        border-radius: 7px;
        margin-bottom: 50px;
        height: 250px;
    }

    .price_img {
        position: relative;
    }

    .price {
        position: absolute;
        top: 40%;
        right: 0;
    }

    .price_content h4,
    p {
        color: white;
    }
</style>
<x-layouts.main2>
    <section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">{{__('words.category')}}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">{{__('words.home')}}</a></li>
                    <li>{{__('words.category')}}</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container my-3">
        <div class="" style="display: flex; gap: 10px; justify-content: space-between;">

            <div class="row ">
                <div class="col-md-3 ">
                    <div class="shop-sidebar w-100">
                        <div class="sidebar-widget category-widget" style="background-color: #2d2b3e !important;">
                            <div class="widget-title">
                                <h5 class="widget-title" style="color: white;">{{__('words.categories')}}</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach($categories as $tm)
                                    <li><a href="{{route('products',$tm->id)}}" style="color: white;">{{$tm['name_'. $lang]}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row col-md-9">
                    @foreach ($products as $product)
                    <div class="col-md-12">
                        <div class="single_price d-flex align-items-center justify-content-flex-end gap-5 wow animate__fadeIn shadow px-3" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s" style="visibility: visible; animation-duration: 3s; animation-name: fadeIn;">
                            <div class="price_img">
                                <img src="/storage/{{ $product->category->photo}}" style="height: 200px;" alt="">
                                <div class="price">
                                    <p class="category border rounded px-2 py-1 text-20 text-white" style="font-size: 20px; background-color: #2d2b3e;">{{ $product['name_'.$lang]}}</p>
                                </div>
                            </div>
                            <div class="price_content">
                                <h4>{{ $product->price / 1000000}} mln</h4>
                                <div>
                                    <div class="mt-2 justify-content-between d-flex">
                                        <div class="row justify-content-between">
                                            <div class="col-md-6 ">
                                                <p class="aaa border rounded px-2 text-white">{{__('words.size')}}: {{$product->size}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="aaa border rounded px-2 text-white">{{__('words.metr_tonna')}}: {{$product->metr_tonna}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="aaa border rounded px-2 text-white">{{__('words.tonna_metr')}}: {{$product->tonna_metr}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="aaa border rounded px-2 text-white">{{__('words.manufacturer')}}: {{$product->manufacturer}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choose_plan">
                                <button class="cmn_btn increase_width cmn_outline effect px-5 py-2 rounded" onclick="xarid({{$product->id}})" type="button" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                                    <span>{{__('words.buy')}}</span>
                                </button>
                            </div>
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
                    <form id="purchaseForm" action="{{ route('orders.store')}}" method="post" onsubmit="return confirm('{{__('words.confirm_order')}}')">
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
                                    <input type="text" class="form-control" name="phone_number" id="phoneNumber" required placeholder="+998">
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
                                    <label for="weight" class="form-label">{{__('words.length')}} (metr):</label>
                                    <input type="text" class="form-control" name="total_length" id="length" placeholder="{{__('words.placeholderLength')}}" oninput="calculateFromLength()" required>
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
                alert('{{__('words.fill_all_fields')}}');
                return;
            }

            const message = `{{__('words.order_created')}}:\n\n{{__('words.product_name')}}: ${productName}\n{{__('words.customer_name')}}: ${fullName}\n{{__('words.phone_number')}}: ${phoneNumber}\n{{__('words.weight')}}: ${weight} kg\n{{__('words.length')}}: ${length} m\n{{__('words.price')}}: ${price} so'm`;
            const telegramBotToken = 'YOUR_BOT_TOKEN';
            const telegramChatId = 'YOUR_CHAT_ID';

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
                        alert('{{__('words.message_sent')}}');
                        document.getElementById('fullName').value = '';
                        document.getElementById('phoneNumber').value = '';
                        document.getElementById('weight').value = '';
                        document.getElementById('length').value = '';
                        document.getElementById('price').value = '';
                    } else {
                        alert('{{__('words.error_try_again')}}');
                    }
                })
                .catch(error => {
                    console.error('{{__('words.error')}}:', error);
                    alert('{{__('words.error_try_again')}}');
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
                console.error('{{__('words.product_not_found')}}:', productId);
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
            document.getElementById('productPrice').innerText = "{{__('words.per_tonna')}}: " + product.price;

            currentProductPrice = product.price;
            metr_tonna = product.metr_tonna;
            tonna_metr = product.tonna_metr;

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
                resultDiv.value = '{{__('words.enter_valid_length')}}';
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
            resultDiv.value = `{{__('words.total_weight')}}: ${totalWeight.toFixed(2)} kg\n{{__('words.total_price')}}: ${totalPrice} so'm`;
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
                resultDiv.value = '{{__('words.enter_valid_weight')}}';
                return;
            }

            const totalLength = weight / weightPerMeter;
            const totalPrice = weight * currentProductPrice / 1000;
            const formattedPrice = totalPrice.toLocaleString('uz-UZ', {
                style: 'currency',
                currency: 'UZS'
            });

            lengthInput.value = totalLength.toFixed(2);
            priceInput.value = formattedPrice;
            resultDiv.value = `{{__('words.total_length')}}: ${totalLength.toFixed(2)} metr\n{{__('words.total_price')}}: ${formattedPrice} so'm`;

            console.log(`Calculated from Weight: ${weight}kg, Length: ${totalLength}m, Price: ${formattedPrice}so'm`);
        }
    </script>
</x-layouts.main2>

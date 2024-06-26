<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
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

    .price_content h4, p {
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
                                <h5 class="widget-title" style="color: white;">Categories</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach($products as $tm)
                                        <li><a href="{{route('products',$tm->id)}}" style="color: white;">{{$tm['name_'. $lang]}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class=" row col-md-9">
                      <div class="col-md-12">
                          <div
                              class="single_price d-flex align-items-center justify-content-flex-end gap-5 wow animate__fadeIn shadow px-3  "
                              data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s"
                              style="visibility: visible; animation-duration: 3s; animation-name: fadeIn;">
                              <div class="price_img">
                                  <img src="https://megagold.uz/storage/post_photo/palichka%20(2)%201.png"
                                       style="height: 200px;"
                                       alt="">
                                  <div class="price">
                                      <p class="category border rounded px-2 py-1 text-20 text-white"
                                         style="font-size: 20px; background-color: #2d2b3e;">Квадрат 20</p>
                                  </div>
                              </div>
                              <div class="price_content">
                                  <h4>10.5 mln</h4>
                                  <div>
                                      <div class="mt-2 justify-content-between d-flex">
                                          <div class="row justify-content-between">
                                              <div class="col-md-6 ">
                                                  <p class="aaa border rounded px-2 text-white">Size: СТ3СП</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Metr - Tonna: 3.145</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Tonna - Metr: 318</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Manufacturer: Uzbekistan</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="choose_plan">
                                  <button class="cmn_btn increase_width cmn_outline effect px-5 py-2 rounded"
                                          onclick="xarid(38)"
                                          type="button" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                                      <span>Buy</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div
                              class="single_price d-flex align-items-center justify-content-flex-end gap-5 wow animate__fadeIn shadow px-3  "
                              data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s"
                              style="visibility: visible; animation-duration: 3s; animation-name: fadeIn;">
                              <div class="price_img">
                                  <img src="https://megagold.uz/storage/post_photo/palichka%20(2)%201.png"
                                       style="height: 200px;"
                                       alt="">
                                  <div class="price">
                                      <p class="category border rounded px-2 py-1 text-20 text-white"
                                         style="font-size: 20px; background-color: #2d2b3e;">Квадрат 20</p>
                                  </div>
                              </div>
                              <div class="price_content">
                                  <h4>10.5 mln</h4>
                                  <div>
                                      <div class="mt-2 justify-content-between d-flex">
                                          <div class="row justify-content-between">
                                              <div class="col-md-6 ">
                                                  <p class="aaa border rounded px-2 text-white">Size: СТ3СП</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Metr - Tonna: 3.145</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Tonna - Metr: 318</p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p class="aaa border rounded px-2 text-white">Manufacturer: Uzbekistan</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="choose_plan">
                                  <button class="cmn_btn increase_width cmn_outline effect px-5 py-2 rounded"
                                          onclick="xarid(38)"
                                          type="button" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                                      <span>Buy</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>

            </div>
        </div>
</x-layouts.main2>

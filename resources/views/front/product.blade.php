<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

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

</x-layouts.main2>

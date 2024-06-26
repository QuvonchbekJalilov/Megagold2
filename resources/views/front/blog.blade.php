<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main2>

<section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">{{__('words.blog')}}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('index')}}">{{__('words.home')}}</a></li>
                        <li>{{__('words.blog')}}</li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="news-section pb-70">
            <div class="auto-container">
                <div class="row">
                    @foreach ($blogs as $blog)
                        
                    <div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{ route('single_blog',['blog' => $blog->id])}}"><img src="/storage/{{$blog->photo}}"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i>{{ $blog['title_'.$lang]}}</li>
                                </ul>
                                <h4 class="title"><a href="{{ route('single_blog',['blog' => $blog->id])}}">{{Str::limit(strip_tags($blog['content_'.$lang]), 30, '...')}}</a></h4>
                                <a href="{{ route('single_blog',['blog' => $blog->id])}}" class="read-more">{{__('words.read')}}<i
                                        class="fa fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </section>
</x-layouts.main2>
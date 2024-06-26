<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main2>
    <section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">{{ $blog['title_'.$lang]}}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index')}}">{{__('words.home')}}</a></li>
                    <li>{{__('words.blog')}}</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="/storage/{{$blog->photo}}" alt="">
                            <div class="blog-details__date">
                                <span class="day">{{ $blog->created_at->format('D')}}</span>
                                <span class="month">{{ $blog->created_at->format('M')}}</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            
                            <h3 class="blog-details__title">{{ $blog['title_'.$lang]}}</h3>
                            <p class="blog-details__text-2">{{ $blog['short_content_'.$lang]}}
                            </p>
                            <p class="blog-details__text-2">{{ $blog['description_'.$lang]}}
                            </p>
                            <p class="blog-details__text-2">{{ $blog['content_'.$lang]}}
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">{{__('words.recentPost')}}</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($lastBlogs as $l)
                                <li>
                                    <div class="sidebar__post-image"> <img src="/storage/{{$l->photo}}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="{{ route('single_blog', ['blog' => $l->id])}}">{{$l['title_'.$lang]}}</a>
                                        </h3>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">{{__('words.category')}}</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @foreach ($categories as $category)
                                <li><a href="{{ route('products',['product' => $category->id])}}">{{ $category['name_'.$lang]}}<span class="icon-right-arrow"></span></a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-layouts.main>
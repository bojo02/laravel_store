@extends('layouts.base')

@section('title')
    Blog - store.bg
@endsection

@section('menu')

<div class="mobile-category-nav theme1 d-lg-none py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="#">Cables & Adapters</a></li>
                                        <li><a href="#">Batteries</a></li>
                                        <li><a href="#">Chargers</a></li>
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Electronic Cigarettes</a></li>
                                    </ul>
                                </li>
                                
                             
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                        More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection


@section('content')

<section class="blog-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @if($posts)
                    @foreach($posts as $post)
                    <div class="col-12 col-md-6 col-xl-4 mb-30">
                        <div class="single-blog text-left">
                            <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="{{route('post.show', $post->id)}}">
                                <img src="{{asset($post->image)}}" alt="">
                            </a>
                            <div class="blog-post-content">
                                <h5 class="sub-title"> Posted by <a class="blog-link"
                                        href="https://themeforest.net/user/hastech">{{$post->user->name}}</a> <span
                                        class="separator">/</span>{{$post->created_at->format('d-M-Y')}}</h5>
                                <h3 class="title mb-15"><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a>
                                </h3>
                                <p class="text">
                                {{substr($post->content, 0, 2)}}
                                </p>
                                <a class="read-more" href="{{route('post.show', $post->id)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-3 mb-30 order-lg-first">
                <aside class="blog-left-sidebar">
                    <div class="sidebar-widget theme1 mb-30">
                        <h3 class="post-title">Search</h3>
                        <div class="blog-search-form">
                            <form action="#" class="position-relative">
                                <input class="form-control rounded" type="text" placeholder="Enter your search key ...">
                                <button class="btn blog-search-btn text-capitalize" type="submit"><i
                                        class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-30">
                        <h3 class="post-title">Categories</h3>
                        <ul class="blog-links">
                            <li><a href="#">Dresses (20)</a></li>
                            <li><a href="#">Jackets &amp; Coats (9)</a></li>
                            <li><a href="#">Sweaters (5)</a></li>
                            <li><a href="#">Jeans (11)</a></li>
                            <li><a href="#">Blouses &amp; Shirts (3)</a></li>
                            <li><a href="#">Electronic Cigarettes (6)</a></li>
                            <li><a href="#">Bags &amp; Cases (4)</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget mb-30">
                        <h3 class="post-title">Recent Post</h3>
                        <div class="blog-media-list mb-30 media">
                            <div class="post-thumb mr-4">
                                <a href="#"><img src="assets/img/blog-post/1.jpg" alt="img"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="sub-title mb-1"><a href="single-blog.html">This Is First Post </a></h5>
                                <span class="date">Lorem Ipsum is simply</span>
                            </div>
                        </div>
                        <div class="blog-media-list mb-30 media">
                            <div class="post-thumb mr-4">
                                <a href="#"><img src="assets/img/blog-post/2.jpg" alt="img"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="sub-title mb-1"><a href="single-blog.html">This Is Secound Post </a></h5>
                                <span class="date">Lorem Ipsum is simply</span>
                            </div>
                        </div>
                        <div class="blog-media-list mb-30 media">
                            <div class="post-thumb mr-4">
                                <a href="#"><img src="assets/img/blog-post/3.jpg" alt="img"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="sub-title mb-1"><a href="single-blog.html">This Is Third Post </a></h5>
                                <span class="date">Lorem Ipsum is simply</span>
                            </div>
                        </div>
                        <div class="blog-media-list media">
                            <div class="post-thumb mr-4">
                                <a href="#"><img src="assets/img/blog-post/1.jpg" alt="img"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="sub-title mb-1"><a href="single-blog.html">This Is Fourth Post </a></h5>
                                <span class="date">Lorem Ipsum is simply</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="post-title">Tags</h3>
                        <ul class="product-tag d-flex flex-wrap">
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Jewelry &amp; Watches</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection
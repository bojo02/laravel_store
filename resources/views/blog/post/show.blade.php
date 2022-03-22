@extends('layouts.base')

@section('title')
    {{$post->slug}} - store.bg
@endsection

@section('content')

<!-- product tab start -->
<section class="blog-section pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-9 mx-auto">
                <div class="blog-title">
                    <h2 class="title">From Our Blog </h2>
                    <p class="text">The latest news, videos, and discussion topics</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-9 mx-auto">
                <div class="single-blog text-left">
                    <a class="blog-thumb zoom-in d-block overflow-hidden" href="{{route('post.show', $post->id)}}">
                        <img class="object-fit-none" src="{{asset($post->image)}}" alt="blog-thumb-naile">
                    </a>
                    <div class="blog-post-content pt-30">
                        <h3 class="title mb-15"><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h3>
                        <h5 class="sub-title font-style-normal"> Posted by <a class="blog-link"
                                href="https://themeforest.net/user/hastech">{{$post->user->name}}</a> <span class="separator">/</span>
                                {{$post->created_at->format('d-M-Y')}} <span class="separator">/</span> <a class="blog-link"
                                href="https://themeforest.net/user/hastech">Electronics</a></h5>
                        <p class="text">
                        {{$post->content}}
                        </p>
                    </div>
                </div>
                <!-- comment-section start -->
                <div class="comment-section">
                    <div class="comment-list">
                        <h3 class="title">All comments </h3>
                        <img class="avatar" src="assets/img/blog-post/avatar.jpg" alt="avatar">
                        <h4 class="sub-title">avatar</h4>
                        <span>27 sep, 2020 </span>
                        <button class="reply">Reply</button>
                        <p>replying </p>
                    </div>
                </div>
                <!-- comment-section start -->
                <!-- contact-form start -->
                <div class="contact-form">
                    <h3 class="title">Leave a Reply</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">your name</label>
                            <input type="text" class="form-control" id="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email:</label>
                            <input type="email" class="form-control" id="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="url">Website Url:</label>
                            <input type="text" class="form-control" id="url" required="">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" required="">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control mb-30" id="comment" required=""></textarea>
                        </div>
                        <button type="submit" class="btn theme-btn--dark1 btn--lg">Submit Button</button>
                    </form>
                </div>
                <!-- contact-form start -->
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

@endsection
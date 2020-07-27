@extends('client.master')
@section('title')
{{$blog->name}}
@stop
@section('content')
 <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('clientHome')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="breadcrumb-item active">{{$blog->name}}</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- blog-sidebar-wrap start -->
                        <div class="blog-sidebar-wrap">
                            <div class="blog-sidebar-widget-area">

                                <!--single-widget start  -->
                                <div class="single-widget search-widget mb-30">
                                    <h4 class="widget-title">Search</h4>
                                    <form action="#">
                                        <div class="form-input">
                                            <input type="text" placeholder="Search... ">
                                            <button class="button-search" type="submit"><i class="icon-magnifier"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <!--single-widget start end -->

                                <!--single-widget start  -->
                                <div class="single-widget mb-30">
                                    <h4 class="widget-title">Categories</h4>
                                    <!-- category-widget start -->
                                    <div class="category-widget-list">
                                        <ul>
                                            @foreach($category as $value)
                                            <li><a href="#">{{$value->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- category-widget end -->
                                </div>
                                <!--single-widget end  -->

                                <!--single-widget start  -->
                                <div class="single-widget mb-30">
                                    <h4 class="widget-title">Recent Posts</h4>

                                    <div class="recent-post-widget">
                                        <div class="single-widget-post">
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/images/blog/small-blog.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h6 class="post-title"><a href="#">Maecenas ultricies</a></h6>
                                                <div class="post-date">Apr 24.2019</div>
                                            </div>
                                        </div>
                                        <div class="single-widget-post">
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/images/blog/small-blog-02.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h6 class="post-title"><a href="#">Post with Gallery</a></h6>
                                                <div class="post-date">Apr 24.2019</div>
                                            </div>
                                        </div>
                                        <div class="single-widget-post">
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/images/blog/small-blog-03.jpg" alt=""></a>
                                            </div>
                                            <div class="post-info">
                                                <h6 class="post-title"><a href="#">Maecenas ultricies</a></h6>
                                                <div class="post-date">Apr 24.2019</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--single-widget end  -->

                                <!--single-widget start  -->
                                <div class="single-widget mb-30">
                                    <h4 class="widget-title">Archives</h4>
                                    <!-- category-widget start -->
                                    <div class="category-widget-list">
                                        <ul>
                                            <li><a href="#">April 2018</a></li>
                                            <li><a href="#">April 2019</a></li>
                                        </ul>
                                    </div>
                                    <!-- category-widget end -->
                                </div>
                                <!--single-widget end  -->

                                <!--single-widget start  -->
                                <div class="single-widget mb-30">
                                    <h4 class="widget-title">Product tags</h4>

                                    <ul class="sidebar-tag">
                                        <li><a href="#">accesories</a></li>
                                        <li><a href="#">blouse</a></li>
                                        <li><a href="#">clothes</a></li>
                                        <li><a href="#">desktop</a></li>
                                        <li><a href="#">digital</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">women</a></li>
                                        <li><a href="#">men</a></li>
                                        <li><a href="#">laptop</a></li>
                                        <li><a href="#">handbag</a></li>
                                    </ul>
                                </div>
                                <!--single-widget end -->

                            </div>
                        </div>
                        <!-- blog-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        <div class="blog-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- single-blog-wrap Start -->
                                    <div class="single-blog-wrap mb-40">
                                        <div class="latest-blog-content mt-0">
                                            <h4><a href="blog-details.html"></a></h4>
                                            <ul class="post-meta">
                                                <h4><a href="{{route('blogDetail',$blog->slug)}}">{{$blog->name }}</a></h4>
                                                <li class="post-date">{{$blog->created_at}}</li>
                                            </ul>
                                        </div>
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{$blog->image}}" alt="" width="100%"></a>
                                        </div>
                                        <div class="latest-blog-content mt-20">

                                            {!!$blog->content!!}
                                        </div>

                                        <div class="meta-sharing">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="entry-meta mt-15">
                                                        Tags: <a href="#">Watch</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="social-icons text-right">
                                                        <li>
                                                            <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="rss social-icon" href="#" title="Rss" target="_blank"><i class="fa fa-rss"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-blog-wrap End -->

                                </div>
                            </div>

                            <div class="related-post-blog-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h4>Related posts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($blog_list as $value)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-latest-blog mt-30">
                                            <div class="latest-blog-image">
                                                <a href="{{route('blogDetail',$value->slug)}}"><img src="{{$value->image}}" alt=""></a>
                                            </div>
                                            <div class="latest-blog-content mt-20">
                                                <h4><a href="{{route('blogDetail',$value->slug)}}"> {{$value->name}}</a></h4>
                                                <ul class="post-meta">
                                                    <li class="post-date">{{$value->created_at}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
        @stop
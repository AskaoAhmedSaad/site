@extends('layout.master')

@section('content')
    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/blog/ems-blog.jpg')}}');">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">اخر الاخبار</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s"></h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">الرئيسيه</a></li>
                <li class="active">اخر الاخبار</li>
            </ol>
        </div>
    </section>


    <section class="type2">
        <div class="container relative">
            <div class="row">
                <!-- content -->
                <div class="col-md-12">
                    <div class="blog-posts-content row ">

                        @foreach($articles as $article)
                            <div class="col-md-4 col-sm-6 col-xs-6 col-12  pull-right text-right">
                                <!-- standard post -->
                                <article class="entry-item ">
                                    <div class="entry-img">
                                        <a href="{{url('/blog/articles').'/'.$article->id}}">
                                            <img src="{{url('public/images/blog/' . $article->image)}}"
                                                 alt="{{$article->title}}">
                                        </a>
                                    </div>

                                    <div class="entry">
                                        <div class="entry-head text-right">
                                            <h2 class="entry-title text-right">
                                                <a href="{{url('/blog/articles').'/'.$article->id}}">
                                                    {{$article->title}}
                                                </a>
                                            </h2>
                                            <div class="entry-meta list-inline">
                                                <span class="entry-date">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{$article->created_at}}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="entry-content text-right">
                                            <p>
                                                {{$article->abstract}}
                                            </p>

                                            <div class="entry-footer text-right">
                                                <a href="{{url('/blog/articles').'/'.$article->id}}" class="send_btn">
                                                    المزيد <i class="ion-arrow-right-c"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </article> <!-- end standard post -->
                            </div><!-- end col -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

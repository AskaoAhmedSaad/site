<footer class="type1">
    <div class="overlay">
        <div class="background-overlay overlay_opacity_15" style="background-image: url(images/bg_footer.jpg);"></div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact">
                        <h3>Contact details</h3>
                        <div class="icon_box">
                            <div class="icon"><span class="ion-android-call"></span></div>
                            <div class="info_holder">
                                <h4>call us</h4>
                                +977 (9841) 75 23 20
                            </div>
                        </div>

                        <div class="icon_box">
                            <div class="icon"><span class="ion-android-pin"></span></div>
                            <div class="info_holder">
                                <h4>Address</h4>
                                245 Quigley Blvd, Ste K
                            </div>
                        </div>

                        <div class="icon_box">
                            <div class="icon"><span class="ion-android-mail"></span></div>
                            <div class="info_holder">
                                <h4>Email</h4>
                                <a href="mailto:#">support@mine.co</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact">
                        <h3>recent post</h3>
                        <ul class="recent_posts" style="margin-left: -70px">
                            @foreach($latestBlog as $article)
                                <li>
                                    <div class="recent_posts_content">
                                        <img src="{{url('public/images/blog/' . $article->image)}}"
                                             alt="{{$article->title}}">
                                        <a href="blog-single.html" class="recent-title">{{$article->title}}</a>
                                        <div class="recent_posts_info">

                                            <a href="index.html#">  {{$article->created_at}}</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact">
                        <h3>useful links</h3>
                        <ul class="footer-links">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('services')}}">Services</a></li>
                            <li><a href="{{url('inquire_order')}}">Order Now</a></li>
                            <li><a href="{{url('blog')}}">Blog</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright&nbsp;©&nbsp;2017. EMS.</p>
                </div>
                <div class="col-md-6">
                    <div class="social-icons pull-right">
                        <a href="index.html#"><i class="ion-social-dribbble-outline"></i></a>
                        <a href="index.html#"><i class="ion-social-octocat"></i></a>
                        <a href="index.html#"><i class="ion-social-twitter"></i></a>
                        <a href="index.html#"><i class="ion-social-instagram"></i></a>
                        <a href="index.html#"><i class="ion-social-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

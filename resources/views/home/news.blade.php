@extends('layouts.frontbase')

@section('title', $data->title)
@include('home.header')
@section('head')
    <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>

@endsection




@section('content')

    <section id="content-wrap" class="blog-single">
        <div class="row">
            <div class="col-twelve">

                <article class="format-standard">
                    <h1 class="page-title">{{$data->title}}</h1>
                    @include('home.messages')

                    <ul class="entry-meta">
                        <li class="date">Updated at : {{$data->updated_at}}</li>
                        <li class="cat"><a href="{{route('categorynews',['id'=>$data->category->id,'slug'=>$data->category->slug])}}">{{$data->type}}</a><a href=""></a></li>
                        @php
                            $average= $data->comment->average('rate');


                        @endphp
                        <a href="#">{{$data->comment->count('id')}}  Reviews /{{number_format($average,1)}} </a>

                        @if($average<=1.0)
                            <i class="fa fa-star" ></i>
                        @endif

                        @if($average >=2.0 and $average <3.0  )
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        @endif
                        @if($average >= 3.0 and $average <4.0)
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        @endif
                        @if($average >=4 and $average <5.0)
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        @endif
                        @if($average>=5)
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        @endif


                    </ul>


                    <div class="content-media">
                        <div class="post-thumb" >
                            <img src="{{Storage::url($data->image)}}" style="height: 679px;width: 800px">
                        </div>
                    </div>

                    <div class="primary-content">

                        <p class="lead"> {{$data->description}}</p>





                        <h2>News Detail</h2>

                        <p>{!!$data->detail!!}</p>



                            <!-- slider burada-->

                            <h1>Other İmages for News</h1>
                        <div class="brick entry featured-grid animate-this">
                            <div class="entry-content">
                                <div id="featured-post-slider" class="flexslider">
                                    <ul class="slides">
                                        @foreach($images as $rs)
                                        <li>
                                            <div class="featured-post-slide">

                                                <div class="post-background" style="background-image:url({{Storage::url($rs->image)}});"></div>

                                                <div class="overlay"></div>

                                                <div class="post-content">
                                                    <ul class="entry-meta">

                                                    </ul>

                                                    <h1 class="slide-title"><a  title=""></a></h1>
                                                </div>

                                            </div>
                                        </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>

                            <!-- slider son -->










                        <p class="tags">
                            <span>Tagged in :</span>
                            <a href="{{route('categorynews',['id'=>$data->category->id,'slug'=>$data->category->slug])}}">{{$data->keywords}}</a>
                        </p>

                        <div class="author-profile">
                            <img src="images/avatars/user-05.jpg" alt="">

                            <div class="about">
                                <h4><a href="#">Jonathan Smith</a></h4>

                                <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>

                                <ul class="author-social">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">GooglePlus</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>
                            </div>
                        </div> <!-- end author-profile -->

                    </div> <!-- end entry-primary -->

                    <div class="pagenav group">
                        <div class="prev-nav">
                            <a href="{{route('news',['id'=>$data->id-1,'slug'=>$data->slug])}}" rel="prev">
                                Previous
                                <span>News</span>
                            </a>
                        </div>
                        <div class="next-nav">
                            <a href="{{route('news',['id'=>$data->id+1,'slug'=>$data->slug])}}" rel="next">
                                Next
                                <span>News</span>

                            </a>
                        </div>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">



                    <!-- commentlist -->
                    @foreach($reviews as $rs)
                    <ol class="commentlist">

                        <li class="depth-1">

                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                            </div>

                            <div class="comment-content">

                                <div class="comment-info">
                                    <cite>{{$rs->user->name}}</cite>

                                    <div class="comment-meta">
                                        <time class="comment-time" datetime="2014-07-12T23:05">{{$rs->created_at}}</time>

                                    </div>
                                </div>
                                <div class="review-rating ">

                                    @if($rs->rate == 1)
                                    <i class="fa fa-star" ></i>
                                    @endif

                                    @if($rs->rate == 2)
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                    @endif
                                     @if($rs->rate == 3)
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                     @endif
                                     @if($rs->rate == 4)
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                     @endif
                                     @if($rs->rate == 5)
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                     @endif







                                </div>

                                <div class="comment-text">
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>

                                </div>

                            </div>

                        </li>
                    </ol>
                @endforeach


                    <!-- respond -->
                    <div class="respond">

                        <h3>Leave a Comment</h3>

                        <form name="contactForm" id="contactForm" method="post" action="{{route('storecomment')}}">
                            @csrf
                            <fieldset>

                                <div class="form-field">
                                    <input name="news_id" type="hidden" id="news_id" class="full-width" placeholder="news id" value="{{$data->id}}">
                                </div>

                                <div class="form-field">
                                    <input name="subject" type="text" id="subject" class="full-width" placeholder="subject" value="{{$data->subject}}">
                                </div>

                                <div class="form-field">
                                    <input name="review" type="text" id="review" class="full-width" placeholder="review"  value="{{$data->review}}">
                                </div>

                                    <h1>Your Rating </h1>
                                <div class="star-wrapper">
                                    <input type="radio" id="star5" name="rate"  value="5"/> ★★★★★<label for="star5"></label>
                                    <input type="radio" id="star4" name="rate" value="4"/> ★★★★<label for="star4"></label>
                                    <input  type="radio" id="star3" name="rate" value="3" /> ★★★<label for="star3"></label>
                                    <input type="radio" id="star2" name="rate" value="2" /> ★★<label for="star2"></label>
                                    <input type="radio" id="star1" name="rate" value="1" /> ★<label for="star1"></label>



                                </div>
                                @auth
                                    <button type="submit" class="submit button-primary">Submit</button>
                                @else
                                     <a href="/login"  class="button" >For Submit Your Review,Please Login</a>

                                @endauth



                            </fieldset>
                        </form> <!-- Form End -->

                    </div> <!-- Respond End -->

                </div> <!-- end col-full -->
            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section> <!-- end content -->




@endsection


@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@include('home.header')


@section('content')
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>
                @section('slider')
                    @include('home.slider')

                    @foreach($newslist1 as $rs)
                    <article class="brick entry format-standard animate-this">
        <div class="entry-thumb">
            <a href="{{route('news',['id'=>$rs->id])}}" class="thumb-link">
                <img src="{{Storage::url($rs->image)}}"  alt="building">
            </a>
        </div>

        <div class="entry-text">
            <div class="entry-header">

                <div class="entry-meta">
               			<span class="cat-links">
               				<a href="{{route('news',['id'=>$rs->id])}}">{{$rs->type}}</a>
               			</span>
                </div>

                <h1 class="entry-title"><a href="{{$rs->title}}"></a></h1>


                <div class="entry-meta">
               			<span class="cat-links">
               				<a href="{{route('news',['id'=>$rs->id])}}">{{$rs->title}}</a>
                            <br>
                             <a>{{$rs->comment->count('id')}}  Reviews  </a>
                             @php
                                 $average= $rs->comment->average('rate');


                             @endphp
                            @if($average<=1.0)
                                <i class="fa fa-star" ></i>
                            @endif

                            @if($average >=2.0 and $average <3.0 )
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


               			</span>
                </div>
            </div>
        </div>
    </article>
                @endforeach



    <!-- end article -->


            </div> <!-- end brick-wrapper -->

    </div> <!-- end row -->


    <div class="row">

        <nav class="pagination">
            <span class="page-numbers prev inactive">Prev</span>
            <span class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="page-numbers">4</a>
            <a href="#" class="page-numbers">5</a>
            <a href="#" class="page-numbers">6</a>
            <a href="#" class="page-numbers">7</a>
            <a href="#" class="page-numbers">8</a>
            <a href="#" class="page-numbers">9</a>
            <a href="#" class="page-numbers next">Next</a>
        </nav>

    </div>
    </section>
@endsection


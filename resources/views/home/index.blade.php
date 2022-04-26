@extends('layouts.frontbase')

@section('title', 'News Web Sites')
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
            <a href="{{asset('assets')}}/a.html" class="thumb-link">
                <img src="{{Storage::url($rs->image)}}"  style="width: 286px;height: 296px" alt="building">
            </a>
        </div>
        <div class="entry-text">
            <div class="entry-header">

                <div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a>
               				<a href="#">Photography</a>
               			</span>
                </div>

                <h1 class="entry-title"><a href="{{$rs->title}}"></a></h1>

            </div>
            <div class="entry-excerpt">
                {{$rs->title }}
            </div>
        </div>

    </article> <!-- end article -->
                    @endforeach

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


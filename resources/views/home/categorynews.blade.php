@extends('layouts.frontbase')

@section('title', $category->title . ' News')
@include('home.header')

@section('content')

    <section id="page-header">
        <h1 class="page-header">{{$category->title}}  News</h1>
        <div class="row current-cat">
            <div class="col-full">
                <h1></h1>
            </div>
        </div>
    </section>


    <!-- masonry
    ================================================== -->

    <section id="bricks" class="with-top-sep">


        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>
                @foreach($news as $rs)
                <article class="brick entry format-standard animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('news',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="thumb-link">
                            <img src="{{Storage::url($rs->image)}}" alt="building">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">

                            <div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">{{$rs->type}}</a>
               			</span>
                            </div>

                            <h1 class="entry-title"><a href="{{route('news',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h1>

                        </div>
                        <div class="entry-excerpt">

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

    </section> <!-- bricks -->


@endsection

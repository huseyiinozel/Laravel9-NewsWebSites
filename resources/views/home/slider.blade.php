<div class="brick entry featured-grid animate-this">
    <div class="entry-content">
        <div id="featured-post-slider" class="flexslider">
            <ul class="slides">
                @foreach($sliderdata as $rs)
                <li>
                    <div class="featured-post-slide">

                        <div class="post-background">
                            <img src="{{Storage::url($rs->image)}}" style="width: 1200px; height: 600px">

                        </div>


                        <div class="overlay"></div>

                        <div class="post-content">
                            <ul class="entry-meta">

                            </ul>

                            <h1 class="slide-title"><a href="{{route('news',['id'=>$rs->id,'slug'=>$rs->slug])}}" title="">{{$rs->title}}</a></h1>
                        </div>

                    </div>
                </li> <!-- /slide -->
                @endforeach

            </ul> <!-- end slides -->
        </div> <!-- end featured-post-slider -->
    </div> <!-- end entry content -->
</div>

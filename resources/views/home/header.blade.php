@section('icon', Storage::url($setting->icon))

<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">
        @php
        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp

        <div class="logo">
            <a href="{{route('home')}}"></a>
        </div>

        <nav id="main-nav-wrap">

            <ul class="main-navigation sf-menu">
                @foreach($mainCategories as $rs)
                <li class="has-children">
                    <a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->slug])}}" > {{$rs->title}}</a>


                        <ul class="sub-menu">
                            @if(count($rs->children))

                                @include('home.categorytree',['children' => $rs->children])

                            @endif

                        </ul>


                </li>

                @endforeach
            </ul>

        </nav> <!-- end main-nav-wrap -->


        <div class="search-wrap">

            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers">
            <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>


</header>
<!-- end header -->

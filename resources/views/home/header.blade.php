

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

                    <li><a href="{{route('about')}}" title="">About Us</a></li>
                    <li><a href="{{route('references')}}" title="">References</a></li>
                    <li><a href="{{route('contact')}}" title="">Contact</a></li>
                    <li><a href="{{route('faq')}}" title="">FAQ</a></li>
                    <li>

                        <i class="fa fa-user fa-2x"></i>
                        <br>
                        @auth
                            <ul class="sub-menu">
                                <li><a><i></i>{{Auth::user()->name}}</a>
                                </li>
                                <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user fa-fw"></i>My Profile</a>
                                </li>
                                <li><a href="{{route('userpanel.news')}}"><i class="fa fa-user-md fa-fw"></i>My News</a>
                                </li>
                                <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-user-md fa-fw"></i>My Reviews</a>
                                </li>

                                <li><a href="/logoutuser"><i class="fa fa-sign-out fa-fw"></i>  Log Out</a>
                                </li>
                            </ul>
                            </ul>
                    @endauth
                    @guest
                        <!-- dropdown user-->
                            <ul class="dropdown-menu dropdown-user">

                            <li><a href="/loginuser"><i class="fa fa-user fa-fw"></i>Login</a>
                            </li>
                            <li><a href="/registeruser"><i class="fa fa-user-md fa-fw"></i>Register</a>
                            </li>

                        </ul>
                            @endguest
                        <!-- end dropdown-user -->
                    </li>
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

@extends('layouts.frontbase')
@include('home.header')

@section('title','About Us | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>

                    <div class="content-media">
                        <img src="{{asset('assets')}}/images/thumbs/about-us.jpg">
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">Learn More About Us.</h1>



                        <p>{!! $setting->aboutus !!}</p>





                        </div>
                </section>

                    </div>
        </div>


    </section>





@endsection

@extends('layouts.frontbase')
@include('home.header')

@section('title','References| '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>



                    <h2 class="primary-content"> </h2>

                        <h1 class="entry-title add-bottom">References</h1>


                        <h2>{!! $setting->references !!}</h2>









                </section>

                    </div>
        </div>


    </section>





@endsection

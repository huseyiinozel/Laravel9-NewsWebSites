@extends('layouts.frontbase')
@include('home.header')

@section('title','FAQ| '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>



                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">FAQ</h1>
                            @foreach($datalist as $rs)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $rs->question }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        {!!  $rs->answer!!}
                                    </div>
                                </div>
                            </div>
                        @endforeach











                    </div>
                </section>

            </div>
        </div>


    </section>










@endsection

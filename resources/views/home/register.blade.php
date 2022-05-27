@extends('layouts.frontbase')
@include('home.header')


@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>



                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">User Register</h1>



                       @include('auth.register')





                        </div>
                </section>

                    </div>
        </div>


    </section>





@endsection

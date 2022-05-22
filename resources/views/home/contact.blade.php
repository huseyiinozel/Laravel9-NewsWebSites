@extends('layouts.frontbase')
@include('home.header')

@section('title','Contact| '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>



                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">Get In Touch With Us.</h1>




                    </div>

                            @include('home.messages')
                        <form name="cForm" id="cForm" method="post" action="{{route('storemessage')}}" >
                            <fieldset>
                                @csrf

                                <div class="form-field">
                                    <input name="name" type="text" id="cName" class="full-width" placeholder="Name&Surname" value="">
                                </div>

                                <div class="form-field">
                                    <input name="phone" type="tel" id="cEmail" class="full-width" placeholder="Phone" value="">
                                </div>

                                <div class="form-field">
                                    <input name="email" type="email" id="cWebsite" class="full-width" placeholder="E-mail"  value="">
                                </div>

                                <div class="message form-field">
                                    <textarea name="subject" id="cMessage" type="text" class="full-width" placeholder="Subject" ></textarea>
                                </div>
                                <div class="message form-field">
                                    <textarea name="message" id="cMessage" type="text" class="full-width" placeholder="Message" ></textarea>
                                </div>



                                <button type="submit"  class="submit button-primary full-width-on-mobile">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

                </section>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->
    </section> <!-- end content -->


@endsection

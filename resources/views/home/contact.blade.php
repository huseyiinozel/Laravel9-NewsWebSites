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



                        <p>{!! $setting->contact !!} </p>
                    </div>


                        <form name="cForm" id="cForm" method="post" action="">
                            <fieldset>

                                <div class="form-field">
                                    <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                                </div>

                                <div class="form-field">
                                    <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                                </div>

                                <div class="form-field">
                                    <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                                </div>

                                <div class="message form-field">
                                    <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                                </div>

                                <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

                </section>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->
    </section> <!-- end content -->


@endsection

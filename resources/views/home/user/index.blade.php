@extends('layouts.frontbase')
@include('home.header')

@section('title','User Panel ')


@section('content')
    <div  class="row" id="wrapper">

        <nav class="col-md-12" role="">
            <!-- sidebar-collapse -->
            <div class="col-md-4">
                <h1>User Menu</h1>
                @include('home.user.usermenu')

            </div>
            <div class="col-md-8">
                <h1 class="page-header">User Profile</h1>
                @include('profile.show')

            </div>
        </nav>





                </div>

@endsection

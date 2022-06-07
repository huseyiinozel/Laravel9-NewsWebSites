@extends('layouts.frontbase')
@include('home.header')

@section('title','User Comments & Reviews ')


@section('content')
    <div  class="row" id="wrapper">

        <nav class="col-md-12" role="">
            <!-- sidebar-collapse -->
            <div class="col-md-4">
                <h1>User Menu</h1>
                @include('home.user.usermenu')

            </div>
            <div class="col-md-8">
                <h1 class="page-header">User Comments + Reviews</h1>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style ="width:10px">Id </th>

                            <th>News</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>




                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $comments as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>


                                <td><a  href="{{route('news',['id'=>$rs->news_id])}}" >{{$rs->news->title}} </td>
                                <td>{{$rs->subject}} </td>
                                <td>{{$rs->review}} </td>
                                <td>{{$rs->rate}} </td>
                                <td>{{$rs->status}} </td>




                                <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                       onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </nav>





                </div>

@endsection

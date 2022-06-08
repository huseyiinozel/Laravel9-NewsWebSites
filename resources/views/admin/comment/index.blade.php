@extends('layouts.adminbase')

@section('title', ' Comment List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Comment List</h1>



                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Name</th>
                                <th>News</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>



                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>

                                <td>{{$rs->user->name}} </td>
                                <td><a  href="{{route('admin.news.show',['id'=>$rs->news_id,'slug'=>$rs->slug])}}" >{{$rs->news->title}} </td>
                                <td>{{$rs->subject}} </td>
                                <td>{{$rs->review}} </td>
                                <td>{{$rs->rate}} </td>
                                <td>{{$rs->status}} </td>



                                <td><a href="{{route('admin.comment.show',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-primary btn-success"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a> </td>

                                <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>

                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


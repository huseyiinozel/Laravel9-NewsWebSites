@extends('layouts.adminbase')

@section('title', ' Contact Form Message List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Message List</h1>



                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>



                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>

                                <td>{{$rs->name}} </td>
                                <td>{{$rs->phone}} </td>
                                <td>{{$rs->email}} </td>
                                <td>{{$rs->subject}} </td>
                                <td>{{$rs->status}} </td>



                                <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a> </td>

                                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>

                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


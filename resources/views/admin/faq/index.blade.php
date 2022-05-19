@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">faq List</h1>
                    <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add Question</a>


                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->question}} </td>
                                <td>{!! $rs->answer!!} </td>
                                <td>{{$rs->status}} </td>

                                <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-info">Edit</a> </td>
                                <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                                <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success ">Show</a> </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


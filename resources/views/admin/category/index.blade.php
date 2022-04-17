@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Category List</h1>
                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
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
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/category/edit {{$rs->id}}"class="btn btn-primary btn-info">Edit</a> </td>
                                <td><a href="/admin/category/delete {{$rs->id}}"class="btn btn-primary btn-danger">Delete</a> </td>
                                <td><a href="/admin/category/Show {{$rs->id}}"class="btn btn-primary btn-success ">Show</a> </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


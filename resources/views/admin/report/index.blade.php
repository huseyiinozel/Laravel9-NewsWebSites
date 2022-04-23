@extends('layouts.adminbase')

@section('title', 'Report List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Report List</h1>
                    <a href="{{route('admin.report.create')}}" class="btn btn-primary">Add Report</a>


                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Category</th>
                                <th>Title</th>
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
                                <td> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                <td>{{$rs->title}} </td>
                                <td>{{$rs->description}} </td>

                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.report.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-info">Edit</a> </td>
                                <td><a href="{{route('admin.report.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                                <td><a href="{{route('admin.report.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success ">Show</a> </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


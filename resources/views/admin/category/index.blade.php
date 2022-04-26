@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Category List</h1>
                    <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a>


                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Slug</th>
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
                                <td> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                <td>{{$rs->title}} </td>

                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>{{$rs->slug}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-info">Edit</a> </td>
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success ">Show</a> </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


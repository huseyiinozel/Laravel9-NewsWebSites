@extends('layouts.frontbase')
@include('home.header')

@section('title','User News ')


@section('content')
    <div  class="row" id="wrapper">

        <nav class="col-md-12" role="">
            <!-- sidebar-collapse -->
            <div class="col-md-4">
                <h1>User Menu</h1>
                @include('home.user.usermenu')

            </div>
            <div class="panel-body" >

                <div class="table-responsive">
                    <h1>My News</h1>
                    <table class="table">
                        <h1 class="page-header">News List</h1>
                        <a  href="news/create"class="button button-primary">Add News</a>
                        <thead>
                        <tr>

                            <th style ="width:10px">Id </th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Slug</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
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
                                <td>{{$rs->type}} </td>
                                <td>{{$rs->slug}} </td>
                                <td>{{$rs->title}} </td>
                                <td>{{$rs->description}} </td>

                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td> <a href="{{route('image.index',['nid'=>$rs->id])}}"
                                        onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets')}}/admin/assets/img/gallery.jpg" style="height: 40px" >
                                    </a>

                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('userpanel.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-info">Edit</a> </td>
                                <td><a href="{{route('userpanel.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
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

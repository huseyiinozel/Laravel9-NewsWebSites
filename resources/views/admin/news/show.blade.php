@extends('layouts.adminbase')

@section('title', 'Show News : '.$data->title)


@section('content')
    /*
    */
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Details for  : {{$data->title}}</h1>
                <div class="col-lg-12">
                    <a href="{{route('admin.news.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin.news.destroy',['id'=>$data->id])}}"  onclick="return confirm ('Deleting !! Are you sure ?')" class="btn btn-danger">Delete</a>

                </div>
                &nbsp;

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="width: 200px">Id</th>
                        <th>{{$data->id}}</th>
                    </tr>
                    <tr>
                        <th >Category</th>
                        <th>
                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}

                        </th>
                    </tr>
                    <tr>
                        <th >Type</th>
                        <th>{{$data->type}}</th>
                    </tr>


                    <tr>
                        <th >Title</th>
                        <th>{{$data->title}}</th>
                    </tr>
                    <tr>
                    <tr>
                        <th >Slug</th>
                        <th>{{$data->slug}}</th>
                    </tr>
                        <th >Keywords</th>
                        <th>{{$data->keywords}}</th>
                    </tr>
                    <tr>
                        <th >Description</th>
                        <th>{{$data->description}}</th>
                    </tr>
                    <tr>
                        <th >Detail</th>
                        <th>{!! $data->detail !!}</th>
                    </tr>
                    <tr>
                        <th >Image</th>


                       <td> @if($data->image)
                               <img src="{{Storage::url($data->image)}}" style="height: 160px">
                        @endif </td>



                    </tr>
                    <tr>
                        <th >Status</th>
                        <th>{{$data->status}}</th>
                    </tr>
                    <tr>
                        <th >Created Date</th>
                        <th>{{$data->created_at}}</th>
                    </tr>
                    <tr>
                        <th >Update Date</th>
                        <th>{{$data->updated_at}}</th>
                    </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection


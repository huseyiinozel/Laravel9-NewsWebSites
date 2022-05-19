@extends('layouts.adminbase')

@section('title', 'Show faq : ')


@section('content')
    /*
    */
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Details</h1>
                <div class="col-lg-12">
                    <a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}"  onclick="return confirm ('Deleting !! Are you sure ?')" class="btn btn-danger">Delete</a>

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
                        <th >Question</th>
                        <th>{{$data->question}}</th>
                    </tr>
                    <tr>
                        <th >Answer</th>
                        <th>{!! $data->answer !!}</th>
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


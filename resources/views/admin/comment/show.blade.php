@extends('layouts.adminwindow')

@section('title', 'Show Comment : ')


@section('content')


                <div class="col-lg-12">
                        <br>
                    <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}"  onclick="return confirm ('Deleting !! Are you sure ?')" class="btn btn-danger">Delete</a>

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
                        <th >Name & Surname</th>
                        <th>{{$data->user->name}}</th>
                    </tr>
                    <tr>
                        <th >News</th>
                        <th>{{$data->news->title}}</th>
                    </tr>



                    <tr>
                        <th >Subject</th>
                        <th>{{$data->subject}}</th>
                    </tr>
                    <tr>
                        <th >Review</th>
                        <th>{{$data->review}}</th>
                    </tr>
                    <tr>
                        <th >Rate</th>
                        <th>{{$data->rate}}</th>
                    </tr>
                    <tr>
                        <th >Ip</th>
                        <th>{!! $data->IP !!}</th>
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
                    <tr>
                        <th >Admin Note :</th>
                        <th>
                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" >
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>

                                </select>
                                <button type="submit" class="btn btn-primary">Update Comment</button>
                            </form>

                        </th>
                    </tr>

                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection


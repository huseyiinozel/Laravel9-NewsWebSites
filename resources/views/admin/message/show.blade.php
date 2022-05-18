@extends('layouts.adminwindow')

@section('title', 'Show Message : ')


@section('content')


                <div class="col-lg-12">
                        <br>
                    <a href="{{route('admin.message.destroy',['id'=>$data->id])}}"  onclick="return confirm ('Deleting !! Are you sure ?')" class="btn btn-danger">Delete</a>

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
                        <th>{{$data->name}}</th>
                    </tr>


                    <tr>
                        <th >Phone</th>
                        <th>{{$data->phone}}</th>
                    </tr>
                    <tr>
                    <tr>
                        <th >Email</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th >Subject</th>
                        <th>{{$data->subject}}</th>
                    </tr>
                    <tr>
                        <th >Message</th>
                        <th>{{$data->message}}</th>
                    </tr>
                    <tr>
                        <th >Ip</th>
                        <th>{!! $data->ip !!}</th>
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
                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" >
                                @csrf
                            <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                <button type="submit" class="btn btn-primary">Update Note</button>
                            </form>

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection


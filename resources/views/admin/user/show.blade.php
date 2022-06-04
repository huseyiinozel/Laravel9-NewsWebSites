@extends('layouts.adminwindow')

@section('title', 'Show User : ')


@section('content')



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
                    <tr>
                        <th >Email</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th >Roles</th>
                        <th>
                            @foreach($data->roles as $role)

                                {{$role->name}}
                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-primary btn-danger"
                                   onclick="return confirm ('Deleting !! Are you sure ?')">[X]</a>
                            @endforeach

                        </th>
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
                        <th >Add Role</th>
                        <th>
                            <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" >
                                @csrf
                                <select name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>


                                    @endforeach



                                </select>
                                <button type="submit" class="btn btn-primary">Update Role</button>
                            </form>

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>







@endsection


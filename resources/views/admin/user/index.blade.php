@extends('layouts.adminbase')

@section('title', ' User List')


@section('content')



    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">User List</h1>



                </div>
            </div>
            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>




                                <th style="width: 40px">Show</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>

                                <td>{{$rs->name}} </td>
                                <td>{{$rs->email}} </td>
                                <td>
                                    @foreach($rs->roles as $role)
                                        {{$role->name}}
                                    @endforeach

                                    </td>




                                <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a> </td>



                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection


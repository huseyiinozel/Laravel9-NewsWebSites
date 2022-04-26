@extends('layouts.adminwindow')

@section('title', 'News Image Gallerry')


@section('content')
    <h2>{{$news->title}}</h2>
    <hr>

    <form role="form" action="{{route('admin.image.store',['nid'=>$news->id])}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <label>File input</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <button type="submit" value="Upload" class="btn btn-primary">Save</button>
            </div>



    </form>


            <div class="panel-body" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style ="width:10px">Id </th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $images as $rs )
                            <tr class="success">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}} </td>

                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 160px">
                                    @endif
                                </td>

                                <td><a href="{{route('admin.image.destroy',['nid'=>$news->id,'id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                    onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



@endsection


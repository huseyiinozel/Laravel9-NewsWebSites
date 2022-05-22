@extends('layouts.adminbase')

@section('title', 'Edit News : '.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit News : {{$data->title}}</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.news.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="category_id" style="...">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>







                                    <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}" >

                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" value="{{$data->slug}}" >

                                </div>
                                <div class=form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="type">
                                        <option selected>{{$data->type}}</option>
                                        <option>News</option>
                                        <option>Corner Post </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords"  value="{{$data->keywords}}">

                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">

                                </div>
                                <div class="form-group">
                                    <label>Detail</label>

                                    <textarea class="textarea" id="detail" name="detail"  placeholder="Detail">
                                        {{$data->detail}}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>İmage</label>
                                    <input type="file" name="image">
                                </div>
                                <div class=form-group">
                                    <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Data</button>

                            </form>
                        </div>




                                </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection

@section("foot")


@endsection

@extends('layouts.adminbase')

@section('title', 'Add News')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    /*
    */
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Add News</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent News</label>
                                    <select class="form-control select2" name="category_id" style="...">

                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach

                                    </select>






                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">

                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Slug">

                                </div>
                                <div class=form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="type">
                                        <option>Corner Post</option>
                                        <option>News</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">

                                </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">

                                </div>

                                <div class="form-group">
                                    <label>Detail</label>

                                <textarea class="textarea"  id="detail" name="detail" placeholder="Detail">
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
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                </div>

                                <div class="form-group">
                                    <label>İmage</label>
                                    <input type="file" name="image">
                                </div>

                                <div class=form-group">
                                    <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>

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



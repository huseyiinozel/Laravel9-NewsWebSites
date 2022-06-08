@extends('layouts.frontbase')
@include('home.header')

@section('title','User Add News ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')
    <div  class="row" id="wrapper">

        <nav class="col-md-12" role="">
            <!-- sidebar-collapse -->
            <div class="col-md-4">
                <h1>User Menu</h1>
                @include('home.user.usermenu')

            </div>
            <div class="col-md-8">
                <h1 class="page-header">User Add News</h1>
                <div class="table-responsive">
                    <form role="form" action="store" method="post" enctype="multipart/form-data">
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
                            <label>İmage</label>
                            <input type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div>

            </div>
        </nav>





                </div>

@endsection

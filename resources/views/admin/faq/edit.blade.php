@extends('layouts.adminbase')

@section('title', 'Edit FAQ : ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit faq </h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf








                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" value="{{$data->question}}" >

                                </div>

                                <div class="form-group">
                                    <label>Answer</label>

                                    <textarea class="textarea" id="answer" name="answer"  placeholder="answer">
                                        {{$data->answer}}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>

                                <div class=form-group">
                                    <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                </div>
                                <br>
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

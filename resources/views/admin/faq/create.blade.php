@extends('layouts.adminbase')

@section('title', 'Add FAQ')
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
                    <h1 class="page-header">Add FAQ</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                @csrf







                                </div>






                            <div class="form-group">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" placeholder="question">

                                </div>
                                        <label>Answer</label>

                                    <textarea class="textarea"  id="answer" name="answer" placeholder="answer">
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
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    </div>
                            <br>
                                    <button type="submit" class="btn btn-primary">Save</button>


                            </div>




                                    </div>

                            </div>
                        </div>
        </div>










@endsection
@section("foot")


@endsection



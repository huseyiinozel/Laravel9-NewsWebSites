@extends('layouts.adminbase')

@section('title', 'Add Report')


@section('content')
    /*
    */
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Report</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.report.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Report</label>
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
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">

                                </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">

                                </div>

                                <div class="form-group">
                                    <label>Detail</label>

                                <textarea class="form-control" name="detail" placeholder="Detail">
                                    </textarea>
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


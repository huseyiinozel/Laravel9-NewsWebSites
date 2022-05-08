@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Settings</h1>
            </div>
            <!--End Page Header -->
        </div>

        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data" >
            <section class="content">
                @csrf

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings Tab
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#home-pills" data-toggle="tab">General</a>
                            </li>
                            <li><a href="#profile-pills" data-toggle="tab">Smtp Email</a>
                            </li>
                            <li><a href="#messages-pills" data-toggle="tab">Social Media</a>
                            </li>
                            <li><a href="#settings-pills" data-toggle="tab">About Us</a>
                            </li>
                            <li><a href="#contact-pills" data-toggle="tab">Contact Page</a>
                            </li>
                            <li><a href="#references-pills" data-toggle="tab">References</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-pills">
                                <input type="hidden" id="id" name="id" value="{{$data->id}}">
                                <h4>General Tab</h4>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Project Title">

                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" placeholder="keywords">

                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}"  placeholder="description">

                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}"  placeholder="company">

                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}"  placeholder="address">

                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}"  placeholder="phone">

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}"  placeholder="email">

                                </div>
                                <div class=form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Icon</label>
                                    <input type="file" name="icon" >
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary">Update Settings </button>




                            </div>
                            <div class="tab-pane fade" id="profile-pills">
                                <h4>Smtp Tab</h4>
                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}" placeholder="smtpserver">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}" placeholder="smtpemail">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}" placeholder="smtppassword">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}" placeholder="smtpport">

                            </div>
                                <button type="submit" class="btn btn-primary">Update Settings </button>
                            </div>

                            <div class="tab-pane fade" id="messages-pills">
                                <h4>Social Media Tab</h4>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}" placeholder="fax">

                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="facebook">

                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}" placeholder="instagram">

                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="twitter">

                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}" placeholder="youtube">

                                </div>
                                <button type="submit" class="btn btn-primary">Update Settings </button>

                            </div>
                            <div class="tab-pane fade" id="settings-pills">
                                <h4>About Us Tab</h4>
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea class="textarea" id="aboutus" name="aboutus"  >{{$data->aboutus}}

                                    </textarea>



                                </div>
                                <button type="submit" class="btn btn-primary">Update Settings </button>

                            </div>
                            <div class="tab-pane fade" id="contact-pills">
                                <label>Contact Page</label>
                                <textarea class="textarea" id="contact" name="contact" >{{$data->contact}}

                                    </textarea>

                                <br>
                                <button type="submit" class="btn btn-primary">Update Settings </button>

                            </div>
                            <div class="tab-pane fade" id="references-pills">
                                <h4>References Tab</h4>
                                <textarea class="textarea" id="references" name="references"  >{{$data->references}}

                                    </textarea>

                                <br>
                                <button type="submit" class="btn btn-primary">Update Settings </button>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>


@endsection


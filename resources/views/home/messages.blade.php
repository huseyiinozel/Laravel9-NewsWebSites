@if($message = Session::get('success'))
    <div class="alert-box ss-success hideit">
        <p>{{  $message  }}</p>
        <i class="fa fa-times close"></i>
    </div>

@endif

@if($message = Session::get('error'))
    <div class="alert-box ss-error hideit">
        <p>{{$message}}</p>
        <i class="fa fa-times close"></i>
    </div>
@endif
@if($message = Session::get('warning'))
    <div class="alert-box ss-info hideit">
        <p>{{$message}}</p>
        <i class="fa fa-times close"></i>
    </div>
@endif
@if($message = Session::get('info'))
    <div class="alert-box ss-success hideit">
        <p>{{  $message  }}</p>
        <i class="fa fa-times close"></i>
    </div>
@endif
@if($errors->any())

        <div class="alert-box ss-error hideit">
            <p>Check the following errors :(</p>
            <i class="fa fa-times close"></i>
        </div>


@endif

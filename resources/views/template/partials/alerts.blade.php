@if(Session::get('message'))
    <div class="message">
        <div class="alert alert-info" role="alert">
            {{session('message')}}
        </div>
    </div>
@endif

@if(Session::get('message_error'))
    <div class="message_error">
        <div class="alert alert-danger" role="alert">
            {{session('message_error')}}
        </div>
    </div>
@endif
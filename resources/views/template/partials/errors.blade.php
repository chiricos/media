
@if(count($errors)>0)
    <div class="message_error">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    </div>

@endif
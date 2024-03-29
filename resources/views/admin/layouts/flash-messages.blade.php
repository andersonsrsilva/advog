@if (count($errors) > 0)
    <div class="alert-container">
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-description alert-description-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(session()->get('flash_warning'))
    <div class="alert-container">
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-description alert-description-warning">
                @if(is_array(json_decode(session()->get('flash_warning'), true)))
                    {!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}
                @else
                    {!! session()->get('flash_warning') !!}
                @endif
            </div>
        </div>
    </div>
@elseif (session()->get('flash_success'))
    <div class="alert-container common-success-message">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-description alert-description-success">
                @if(is_array(json_decode(session()->get('flash_success'), true)))
                    {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
                @else
                    {!! session()->get('flash_success') !!}
                @endif
            </div>
        </div>
    </div>
@elseif (session()->get('flash_danger'))
    <div class="alert-container common-danger-message">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-description alert-description-danger">
                @if(is_array(json_decode(session()->get('flash_danger'), true)))
                    {!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}
                @else
                    {!! session()->get('flash_danger') !!}
                @endif
            </div>
        </div>
    </div>
@endif


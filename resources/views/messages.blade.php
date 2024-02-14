
@if(session()->get('flash_success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if(is_array(json_decode(session()->get('flash_success'), true)))
        {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
    @else
        {!! session()->get('flash_success') !!}
    @endif
</div>
@elseif(session()->get('flash_warning'))
<div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if(is_array(json_decode(session()->get('flash_warning'), true)))
        {!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}
    @else
        {!! session()->get('flash_warning') !!}
    @endif
</div>
@elseif(session()->get('flash_info'))
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if(is_array(json_decode(session()->get('flash_info'), true)))
        {!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}
    @else
        {!! session()->get('flash_info') !!}
    @endif
</div>
@elseif(session()->get('flash_danger'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if(is_array(json_decode(session()->get('flash_danger'), true)))
        {!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}
    @else
        {!! session()->get('flash_danger') !!}
    @endif
</div>
@elseif(session()->get('message'))
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if(is_array(json_decode(session()->get('message'), true)))
        {!! implode('', session()->get('message')->all(':message<br/>')) !!}
    @else
        {!! session()->get('message') !!}
    @endif
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-primary alert-dismissible fade show" style="margin-top: 10px;" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ $message }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Whoops!</strong> Something went wrong.<br><br>
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif

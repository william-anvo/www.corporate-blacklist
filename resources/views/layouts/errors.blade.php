@if (count($errors))
    <div class='form-group'>
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">&#169;<em> {!! session('flash_message') !!}</em></div>
@endif
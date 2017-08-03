@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('blogin') }}">
                        {{ csrf_field() }}
reset password
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin's Dashboard</div>
                <div class="panel-body">
                    <h4>    》<a href="{{ route('cust.blacklist') }}">【用户卡】黑名单</a>   </h4>
                    <p>&nbsp;</p>
                    <h4>    》<a href="#" style="background-color:#999">【公司卡】黑名单</a>  (待开发) </h4>
                    <p>&nbsp;</p>
                    <h4>    》<a href="#" style="background-color:#999">【I.P】 黑名单</a> (待开发)  </h4>
                    <p>&nbsp;</p>
                    <h4>    》<a href="#" style="background-color:#999">更改密码</a>  (待开发) </h4>
                    <p>&nbsp;</p>
                    <h4>    》<a href="{{ route('blogout') }}">退出</a>    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ANVO集团 - 黑名单中心</title> <?php //{{ config('app.name', 'XXX') }}// ?>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bankui.css') }}" rel="stylesheet">
<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->    
<style>
.dropdown-menu.remark{
        padding:15px;
        white-space: nowrap;
        overflow: auto;
        min-width: 600px
    }    
.dropdown-menu.remark li{
        padding:3px;
        list-style-type: disc;
        margin-left: 15px;
    }      
.spoiler {
    display: table;
    position: relative;
	background-color: #f9fafa;
	border: 1px solid #ddd;
	margin-bottom: 10px;
}

.spoiler-btn {
	padding: 2px 6px;
	cursor: pointer;
}

.spoiler-body {
	padding: 6px;
}
/* DivTable.com */
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #999999;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
</style>
<!--<script type="text/javascrip">
$('#name').blur(function(){
  this.value = this.value.toUpperCase();
});
</script>-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <b>ANVO集团 - 黑名单 中心</b>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

<!--@if (Auth::check())--> <?php // @if (Auth::user()->is_admin == '1')      ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="{{ route('cust.blacklist') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('cust.blacklist').submit();">
                                                      【用户卡】黑名单
                                        </a>

                                        <form id="cust.blacklist" action="{{ route('cust.blacklist') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                    <li style="background-color:#999">【公司卡】黑名单
<!--                                        
<a href="#"
onclick="event.preventDefault();
         document.getElementById('comp.blacklist').submit();">
          【公司卡】黑名单
</a>

<form id="comp.blacklist" action="#" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
-->
                                    </li>

                                    <li style="background-color:#999">【I.P】 黑名单
<!-- 
<a href="#"
onclick="event.preventDefault();
         document.getElementById('ip.blacklist').submit();">
          【I.P】 黑名单
</a>

<form id="ip.blacklist" action="#" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
-->
                                    </li>
                                    <li>
                                        <a href="{{ route('resetpw') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('resetpw').submit();">
                                                      更改密码
                                        </a>

                                        <form id="resetpw" action="{{ route('resetpw') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogout')}}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                退出
                                        </a>

                                        <form id="logout-form" action="{{ route('blogout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

<!--@else-->
                            <li><a href="{{ route('blogin') }}"><b>登录</b></a></li>
                            <li><a href="{{ route('bregister') }}"><b>注册</b></a></li>
<!--@endif-->
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

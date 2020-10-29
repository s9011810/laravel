<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','HomePage')</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!-- awesome icon-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body style="background-color: #1a202c;overflow: scroll;">
        <div class="container-fluid">
			<div class="row">
				@include('nav')
				@yield('nav')
			</div>
            <div class="row mt">
                @yield('admin_toolbar')
            </div>
            <div class="row">
                @section('activate_info')
                    <div class="row">
                        @include('active_index_content')
                        @yield('content')
                    </div>
                @show
            </div>
            <div class="row">
                @yield('movie_table_info')
            </div>
            <div class="row mt-5">
                @yield('login_area')
            </div>
            <div class="row mt-5">
                @yield('register')
            </div>
            <div class="row mt-5">
                @yield('verify_info')
            </div>
            <div class="row mt-5">
                @yield('movie_info')
            </div>
            <div class="row">
                @yield('admin_member_table')
            </div>
            <div class="row">
                @yield('admin_movie_table')
            </div>
            <div class="row">
                @yield('admin_theater_table')
            </div>
            <div class="row">
                @yield('check_member')
            </div><div class="row">
                @yield('movie_create')
            </div>
            <div class="row">
                @include('footer')
                @yield('footer')
            </div>
		</div>
    </body>
</html>

@extends('extends_type')
@section('content')
@endsection
@section('admin_toolbar')
    <div class="ml-auto">
        <a href="/admin_member/{{Auth::id()}}">會員管理/</a>
        <a href="#">訂單管理/</a>
        <a href="/admin_movie/{{Auth::id()}}">電影管理/</a>
        <a href="/admin_movie/create/{{Auth::id()}}">新增電影管理</a>
    </div>
@endsection
@section('admin_member_table')
@endsection
@section('admin_order_table')
@endsection
@section('admin_movie_table')
@endsection


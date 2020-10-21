@extends('admin.admin_info')
@section('admin_member_table')
    <div class="table-responsive">
    <table class="table table-dark table-bordered">
        <thead>
        <tr>
            <td>會員編號</td>
            <td>會員名稱</td>
            <td>會員手機</td>
            <td>會員郵箱</td>
            <td>會員管理權限</td>
            <td>訂單管理權限</td>
            <td>電影管理權限</td>
            <td>系統管理者</td>
            <td>刪除</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user_nums as $user_num)
            <tr>
                <td>{{$user_num['id']}}</td>
                <td>{{$user_num['name']}}</td>
                <td>{{$user_num['phone']}}</td>
                <td>{{$user_num['email']}}</td>
                    @if($user_num['admin_member']==1)
                    <td>是</td>
                    @else
                    <td>否</td>
                    @endif

                @if($user_num['admin_order']==1)
                    <td>是</td>
                @else
                    <td>否</td>
                @endif
                @if($user_num['admin_movie']==1)
                    <td>是</td>
                @else
                    <td>否</td>
                @endif
                @if($user_num['admin_theater']==1)
                    <td>是</td>
                @else
                    <td>否</td>
                @endif
                @if($user_num['id']!=Auth::id())
                    <td><a class="nav-link" href="/admin_member/destroy/{{$user_num['id']}}">刪除</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection

@extends('admin.admin_info')
@section('content')
@endsection
@section('admin_movie_table')
    <div class="table-responsive">
        <table class="table table-dark table-bordered">
            <thead>
            <tr>
                <td>電影名稱</td>
                <td>電影上架時間</td>
                <td>電影下架時間</td>
                <td>電影簡介</td>
                <td>電影時長</td>
                <td>電影分類</td>
                <td>修改</td>
                <td>刪除</td>
            </tr>
            </thead>
            <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{$movie['Movie_Name']}}</td>
                <td>{{$movie['Movie_Screened']}}</td>
                <td>{{$movie['Movie_Off_Shelf']}}</td>
                <td>{{$movie['Movie_Story']}}</td>
                <td>{{$movie['Movie_Time']}}</td>
                <td>{{$movie['Movie_Class']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('footer')
@endsection

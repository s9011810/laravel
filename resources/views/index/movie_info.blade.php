@extends('extends_type')
@section('movie_table_info')
{{--    @if(isset(Auth::user()->email))--}}
{{--        <div class="alert alert-danger success-block">--}}
{{--            <strong>Welcome!{{Auth::user()->email}}</strong>--}}
{{--            <a href="{{url('logout')}}">Logout</a>--}}
{{--        </div>--}}
{{--    @else--}}
{{--        <script>window.location="/login";</script>--}}
{{--    @endif--}}
    <table class="table table-dark table-responsive-md table-bordered" id="movie_table">
        <thead>

        </thead>
        <tbody>
        <tr>
            <td><img src="https://upload.wikimedia.org/wikipedia/zh/4/44/Your_Name_Engraved_Herein.jpg" height="300px" width="200px"></td>
            <td><img src="https://loory.tw/wp-content/uploads/20200904212145_23.jpg" height="300px" width="200px"></td>
            <td><img src="https://movies.yahoo.com.tw/x/r/w420/i/o/production/movies/July2020/eCKLQ6Ezj7x4n1KDd3NZ-489x720.jpg" height="300px" width="200px"></td>
            <td><img src="https://miro.medium.com/max/816/1*7VlWJ7Zvsc-yEwO-7sJPsw.jpeg" width="200px" height="300px"></td>
        </tr>
        <tr>
            @foreach($movies as $movie)
                <td><a href="/movie/{{$movie->id}}"> <p>{{$movie->Movie_Name}}</p></a></td>
            @endforeach
        </tr>
        </tbody>
    </table>
    @stop
<script>

</script>

@extends('extends_type')
@section('activate_info')
@endsection
@section('movie_info')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://loory.tw/wp-content/uploads/20200904212145_23.jpg">
            </div>
            <div class="col-md-8">
                <h3 style="color: white" class="mb-5">{{$movie_info->Movie_Name}}</h3>
                <p class="text-justify" style="color: white">{{$movie_info->Movie_Story}}</p>
                <button class="btn btn-success mt-2">前往訂票</button>
            </div>
        </div>
    </div>
@endsection

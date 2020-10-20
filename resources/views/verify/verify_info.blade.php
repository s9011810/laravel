@extends('extends_type')
@section('activate_info')
@endsection
@section('verify_info')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                            </div>
                        @endif

                        <form class="d-inline" method="POST" action="#">
                            @csrf
                            <button type="submit" class="btn-success btn-lg btn-link p-0 m-0 align-baseline">驗證</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

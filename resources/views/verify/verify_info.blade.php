@extends('extends_type')
@section('activate_info')
@endsection
@section('verify_info')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>郵件認證</strong></div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('驗證連結已傳到您的信箱') }}
                            </div>
                        @endif
                        {{ __('請檢查是否已經收到郵件連結.') }}
                        {{ __('假如沒有收到驗證連結') }},
                        <form class="d-inline" method="POST" action="{{ url('/email/resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><strong>再次寄送認證</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

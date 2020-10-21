@extends('extends_type')
@section('activate_info')
@endsection
@section('login_area')
   <div class="container h-100 mt-5">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center form_container">
                @if(isset(Auth::user()->email))
                    <script>window.location="/success_login";</script>
                @endif
                @if($message=Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dissmiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                @if ((count($errors)>0))
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{url('/check_login')}}">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" placeholder="password">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customControlInline">--}}
{{--                            <label class="custom-control-label" for="customControlInline" style="color: white">記住我</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn btn-danger"> 登入</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links" style="color: white">
                    沒有任何帳號? <a href="/register" class="ml-2">註冊</a>
                </div>
                <div class="d-flex justify-content-center links"  style="color: white">
                    <a href="#">忘記密碼?</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


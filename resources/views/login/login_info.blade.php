@extends('extends_type')
@section('activate_info')
@endsection
@section('login_area')
   <div class="container h-100 mt-5">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="email" class="form-control"  value="" placeholder="Enter email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline" style="color: white">記住我</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="button" name="button" class="btn login_btn btn-danger">登入</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links" style="color: white">
                    沒有任何帳號? <a href="#" class="ml-2">註冊</a>
                </div>
                <div class="d-flex justify-content-center links"  style="color: white">
                    <a href="#">忘記密碼?</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


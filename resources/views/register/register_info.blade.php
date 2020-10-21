
@extends('extends_type')
@section('activate_info')
@endsection
@section('register')
    <div class="container">
        <form class="border border-white" method="POST" action="/register">
            {{csrf_field() }}
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" class="form-control" placeholder="Full name" type="text" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" class="form-control" placeholder="Email address" type="email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 120px;">
                    <option selected="">+01</option>
                    <option value="1">+02</option>
                    <option value="2">+03</option>
                    <option value="3">+04</option>
                </select>
                <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-address-card"></i> </span>
                </div>
                <input name="address" class="form-control" placeholder="Enter Address" type="text" required>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password" class="form-control" placeholder="Create password" type="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="password_confirmation" placeholder="Repeat password" type="password" required>
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">註冊</button>
            </div>
        </form>
    </div>
@endsection

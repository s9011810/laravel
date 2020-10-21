@extends('extends_type')


@if(isset(Auth::user()->email))
    <strong>HELLO.{{Auth::user()->name}}.請驗證信箱</strong>
    <a href="{{ url('/profile/'.Auth::id()) }}">Click me!</a>
@endif

@extends('extends_type')


@if(isset(Auth::user()->email))
    {{Auth::id()}};
    <a href="{{ url('/profile/'.Auth::id()) }}">Click me!</a>
@endif

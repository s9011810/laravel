@section('nav_list')
    <li class="nav-item">
        <a class="nav-link" href="/"><i class="fas fa-home"></i>首頁</a>
    </li>
    @if(isset(Auth::user()->email))
        <li class="nav-item">
            <a class="nav-link" href="/member_detail/{{Auth::id()}}"><i class="fas fa-layer-group"></i>{{Auth::user()->email}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout"><i class="fas fa-sign-in-alt"></i>登出</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i>登入</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register"><i class="fas fa-user"></i>註冊</a>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-users-cog"></i>後端登入</a>
    </li>
@endsection


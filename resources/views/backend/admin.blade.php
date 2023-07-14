@if(Auth::check())
    Xin chào: {{Auth::user()->email}}
@endif
    <a href="{{ route('auth.logout') }}">Đăng xuất</a>

    
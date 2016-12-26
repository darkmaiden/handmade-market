<ul id="userdropdown" class="dropdown-content">
    @if(isset($_COOKIE['token']))
        <li><a href="{{route('signout')}}">Sign out</a></li>
    @else
        <li><a href="{{route('user.signin')}}">Sign in</a></li>
        <li><a href="{{route('user.register')}}">Sign up</a></li>
    @endif

</ul>
<nav class="#6a1b9a purple darken-3">
    <div class="nav-wrapper">
        <a href="/" class="brand-logo">Handmade Market</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/view">Preview</a></li>
            <li><a class="dropdown-button" href="#" data-activates="userdropdown">User<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="/about">About us</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Preview</a></li>
            <li><a href="{{route('user.signin')}}">Sign in</a></li>
            <li><a href="{{route('user.register')}}">Sign up</a></li>
            <li><a href="#">About us</a></li>
        </ul>
    </div>
</nav>
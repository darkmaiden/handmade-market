
<nav class="#6a1b9a purple darken-3">
    <div class="nav-wrapper">
        <a href="/" class="brand-logo">HM</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/view">Preview</a></li>
            <li><a  href="#" class="dropdown-button" data-activates="userdropdown2">User<i class="material-icons right">arrow_drop_down</i></a></li>

        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="/view">Preview</a></li>
            <li><a  href="#" class="dropdown-button" data-activates="userdropdown">User<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<ul id="userdropdown" class="dropdown-content">
    @if(isset($_COOKIE['token']))
        <li><a href="/seller/index">My Profile</a></li>
        <li><a href="/signout">Sign out</a></li>
    @else
        <li><a href="/signin">Sign in</a></li>
        <li><a href="/signup">Sign up</a></li>
    @endif
</ul>
<ul id="userdropdown2" class="dropdown-content">
    @if(isset($_COOKIE['token']))
        <li><a href="/signout">Sign out</a></li>
    @else
        <li><a href="/signin">Sign in</a></li>
        <li><a href="/signup">Sign up</a></li>
    @endif
</ul>
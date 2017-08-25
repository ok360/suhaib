<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url ('/')}}">Home</a></li>
            <li><a href="{{url ('product')}}">Product</a></li>
            <li><a href="{{url ('student')}}">Student</a></li>
            <li><a href="#">Page 3</a></li>
            @if(!Auth::check())
            <li><a href="{{url ('login')}}">Login</a></li>
            <li><a href="">SignUp</a></li>
            @else

                <li><a href="">Logout</a></li>

            @endif
        </ul>
    </div>
</nav>
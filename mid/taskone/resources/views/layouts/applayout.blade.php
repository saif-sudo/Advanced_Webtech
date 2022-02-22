<html>
<body>
    <div>
        <a href="{{route('home')}} ">Home Page</a>
        <a href="{{route('contacts')}}">Contact Us</a>
        <a href="{{route('login')}}">Login</a>
    </div>
    <div>
    	@yield('content')
    </div>
    
    <div>&copy; 2022 </div>
</body>
</html>
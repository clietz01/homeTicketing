<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <!--login form -->
        <form action="{{route('login')}}">
            @csrf <!--//laravel cross site scripting directive-->
            <input type="text" name="name">
            <label for="name">Username</label>
            <input type="password" name="password">
            <label for="password">Password</label>
            <input type="submit">
        </form>
        @if($errors->any())
        <div id="error-container">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>
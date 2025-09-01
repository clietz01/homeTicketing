<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="form-container">
        <form action="{{route('create_account')}}">
            <input type="text" name="username">
            <label for="username">Username</label>
            <input type="text" name="password">
            <label for="password">Password</label>
            <input type="email" name="email">
            <label for="email">Email</label>
        </form>
    </div>
</body>
</html>
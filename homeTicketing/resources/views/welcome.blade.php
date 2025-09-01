<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body>
    @inertia
    <div id="landing-container">
    <div id="choices">
        <a href="{{route('show_login')}}"><button>Login</button></a>
        <a href="{{route('show_account_creation')}}"><button>Create account</button></a>
    </div>
</body>
</html>
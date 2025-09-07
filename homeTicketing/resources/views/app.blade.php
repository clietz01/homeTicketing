<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @viteReactRefresh
        @vite('resources/js/app.jsx')
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>

<!-- 
This is the main blade view for this app.
With React JS as the frontend, this file simply acts as a home for all react components to be rendered in.
The vite directive in the head references the app.jsx file, the main JSX file used to render every other react comp
-->
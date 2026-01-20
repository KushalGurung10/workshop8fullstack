<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Welcome')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        a { text-decoration: none; color: white; }
        a:hover { text-decoration: underline; }
        .btn { background-color: #007BFF; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-bottom: 10px; }
        ul { list-style: none; padding-left: 0; }
        li { margin-bottom: 10px; }
        li ul { margin-left: 20px; list-style: disc; }
    </style>
</head>
<body>

<h2>Simple Employee CRUD</h2>

<hr>

@yield('content')

</body>
</html>

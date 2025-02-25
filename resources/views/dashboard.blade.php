<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard!</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
<<<<<<< HEAD
        <button type="submit">tyazdi ?log</button>
=======
        <button type="submit">logout</button>
>>>>>>> c8cf72cef7a18d8f5a7e9431a825c755d4f44d51
    </form>
</body>
</html>

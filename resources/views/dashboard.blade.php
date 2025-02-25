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
        <button type="submit">Logout</button>
=======
        <button type="submit">Keluar</button>
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
    </form>
</body>
</html>

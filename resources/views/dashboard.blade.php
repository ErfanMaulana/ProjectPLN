<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: linear-gradient(to right, #243949 0%, #517fa4 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            background-color: #343a40;
            padding-top: 60px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 10px 50px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .header .links {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .header a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            position: relative;
        }

        .header a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .header .logout {
            position: absolute;
            right: 20px;
            top: 10px;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            background-color: #495057;
            border-radius: 5px;
        }

        .header .logout:hover {
            background-color: #6c757d;
        }

        .header a img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .header a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            position: relative;
        }

        .header a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: width 0.5s ease;
        }

        .header a:hover::after {
            width: 100%;
        }

        .header a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .header .logout {
            margin-left: auto;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        .content {
            margin-top: 60px;
        }
    </style>

<div class="header">
    <a href="{{ route('dashboard') }}">Home</a>
    <a href="{{ route('pembayaran') }}">???</a>
    <a href="{{ route('histori') }}">???</a>
    <a href="{{ route('report') }}">???</a>
    <a href="{{ route('logout') }}">???</a>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

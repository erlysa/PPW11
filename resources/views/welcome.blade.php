<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Selamat datang!</h1>
        
        <p class="lead mb-4">Silakan klik tombol di bawah ini untuk melihat data pegawai:</p>

        <a href="{{ route('pegawais') }}" class="btn btn-primary btn-lg">Lihat Data Pegawai</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

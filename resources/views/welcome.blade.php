<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pader Ngopi Adventure</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/bg.jpg') }}')">
    <div class="absolute top-4 right-4 space-x-2">
        <a href="{{ route('login') }}" class="bg-white text-black px-4 py-2 rounded hover:bg-gray-200">Login</a>
        <a href="{{ route('register') }}" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">Register</a>
    </div>
    
    <div class="flex items-center justify-center h-full bg-black bg-opacity-40">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">PADER NGOPI ADVENTURE</h1>
            <p class="text-lg">Selamat datang di pader ngopi adventure. Temukan dan sewa perlengkapan camping terbaik untuk petualangan seru Anda</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание заявления</title>
</head>
<body>
    <header>
        <div class="header">
            <h1 class="logo">НАРУШЕНИЙ<span>.НЕТ</span></h1>
            <div class="account">
                <p class="name"></p>
                <a href="/reports">
                    выйти
                </a> 
            </div>
        </div>
    </header>
    <main>   
    <form className="flex flex-col" action="{{route('reports.store')}}" method="POST" >
        @csrf    
        <input type="text" name="number" placeholder="Номер авто" required>
        <textarea name="description" placeholder="Описание нарушения" required></textarea>
        <input type="submit" value="Создать" method="POST" >
    </form>

    </main>
</body>
</html>
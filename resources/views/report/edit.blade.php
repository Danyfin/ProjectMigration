<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Изменение заявления</title>
</head>
<body>
    <header>
        <div class="header">
            <h1 class="logo">НАРУШЕНИЙ<span>.НЕТ</span></h1>
            <div class="account">
                <p class="name"></p>
                <button>выйти</button>
            </div>
        </div>
    </header>
    <main>   
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf    
        @method('put')
        <input type="text" name="number" placeholder="Номер авто" required value="{{ $report->number}}">
        <textarea name="description" placeholder="Описание нарушения" required value="{{ $report->description}}"></textarea>
        <input type="submit" value="Обновить">
    </form>

    </main>
</body>
</html>
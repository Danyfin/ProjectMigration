<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <title>Заявления</title>
</head>
<body>
    <header>
        <div class="header">
            <h1 class="logo">НАРУШЕНИЙ<span>.НЕТ</span></h1>
            <div class="account">
                <p class="name"></p>
            </div>
        </div>
    </header>
    <main>
        <a href="/reports/create" class="create-report">
            Создать заявление
        </a>    
        <div class="cards"></div>
            @foreach ($reports as $report)
                <div class="card" style="border: 1px solid black; border-radius: 10px; padding: 5px; width: 300px; ">
                    <form action="{{route('reports.destroy', $report->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <p>Номер авто:{{ $report->number}}</p>
                        <p>Описание нарушения:{{ $report->description}}</p>
                        <input type="submit" value="Удалить">
                        <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                    </form>
                </div>
                @csrf
            @endforeach 
        
            
        </div>

    </main>

    
</body>
</html>
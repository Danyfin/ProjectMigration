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
        <div class="">
            <span>Сортироввка по дате создания:</span>
            <a href="{{route('reports.index', ['sort' => 'desc'])}}">сначала новые</a>
            <a href="{{route('reports.index', ['sort' => 'asc'])}}">сначала старые</a>
        </div>
        <div class="">
            <p>Фильтрация по статусу заявки</p>
            <ul>
                @foreach($statuses as $status)
                <li>
                    <a href="{{route('reports.index', ['status' => $status->id])}}">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="cards">
            @foreach ($reports as $report)
                <div class="card" style="border: 1px solid black; border-radius: 10px; padding: 5px; width: 300px; ">
                    <form action="{{route('reports.destroy', $report->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <p>Номер авто:{{ $report->number}}</p>
                        <p>Описание нарушения:{{ $report->description}}</p>
                        <p>{{$report->created_at}}</p>
                        <p>{{$report->status->name}}</p>
                        <input type="submit" value="Удалить">
                        <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                    </form>
                </div>
                @csrf
            @endforeach 
            {{ $reports->links() }}
            
        
            
        </div>

    </main>

    
</body>
</html>
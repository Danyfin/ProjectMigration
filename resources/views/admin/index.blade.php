<x-app-layout>
    <div class="main flex flex-col items-center justify-center">
        <h1>Административная панель</h1>
        <table class="max-w-7xl w-full p">
            <thead >
                <tr>
                    <th>ФИО</th>
                    <th >Текст заявления </th>
                    <th>Номер автомобиля</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $reports as  $report)
                <tr>
                    <th>{{$report->user->name ?? 'Не указано'}}</th>
                    <td class="max-w-lg">{{$report->description}}</td>
                    <td class="">{{$report->number}}</td>
                    <td>
                        <form class="status-form" action="{{ route('reports.status.update', $report->id )}}" method="POST">
                            @method('patch')
                            @csrf
                            <select name="status_id" id="status_id">
                                @foreach ($statuses as $status)
                                <option value="{{$status->id}}" {{$status->id === $report->status_id ? 'selected' : ''}}>
                                    {{$status->name}}
                                </option>
                                @endforeach
                            </select>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
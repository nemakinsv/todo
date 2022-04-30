@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Задачи</div>
                <a href="{{ route('todo.create') }}">Добавить</a>
                @if($todo)

                <table class="table">
                    <tr>
                        <th>Имя задачи</th>
                        <th>Описание задачи</th>
                        <th>Время</th>
                        <th>Действие</th>

                    </tr>
                    @foreach($todo as $td)
                    <tr>
                        <td>{{$td->name}}</td>
                        <td>{{$td->description}}</td>
                        <td>{{$td->time}}</td>
                        <td><a href="{{ route('todo.edit', ['id' => $td->id]) }}">Изменить</a>
                            <a href="{{ route('todo.destroy', ['id' => $td->id]) }}">Удалить</a>
                        </td>


                    </tr>
                    @endforeach

                </table>
                @else
                нет задач
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
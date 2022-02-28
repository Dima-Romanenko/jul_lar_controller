@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">All tasks</div>

                    <div class="panel-body">
                        <!-- Текущие задачи -->
                        @if (count($tasks) > 0)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Текущая задача
                                </div>

                                <div class="panel-body">
                                    <table class="table table-striped task-table">

                                        <!-- Заголовок таблицы -->
                                        <thead>
                                        <th>Task</th>
                                        <th>&nbsp;</th>
                                        </thead>

                                        <!-- Тело таблицы -->
                                        <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <!-- Имя задачи -->
                                                <td class="table-text">
                                                    <div>{{ $task->name }}</div>
                                                </td>

                                                <td>
                                                    <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                    <a href="{{route('tasks.create')}}"class="btn btn-success"><i class="fa fa-plus"> Create new task</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection


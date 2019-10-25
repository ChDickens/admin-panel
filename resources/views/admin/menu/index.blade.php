@extends('admin.layout')

@section('content')
    @extends('admin.layout')

@section('content')
    <h1>Меню</h1>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <td>Id страницы</td>
            <td>Имя страницы</td>
            <td>Управление</td>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-success">Редактировать</a>
                    <a href="" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection
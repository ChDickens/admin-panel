@extends('admin.layout')

@section('content')
    <h1>Контент</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>Id страницы</td>
                <td>Имя страницы</td>
                <td>Управление</td>
            </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>
                    <a href="{{ route('page.edit', $page->id) }}" class="btn btn-success">Редактировать</a>
                    <a href="" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
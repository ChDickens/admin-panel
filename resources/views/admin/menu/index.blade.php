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
            <td>Url страницы</td>
            <td>Управление</td>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->url }}</td>
                <td>
                    <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@endsection
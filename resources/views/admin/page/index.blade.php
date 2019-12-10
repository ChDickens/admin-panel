@extends('admin.layout')

@section('head')
    Все страницы
@endsection

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>Id страницы</td>
                <td>Имя страницы</td>
                <td>Url страницы</td>
                <td>Статус</td>
                <td>Управление</td>
            </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>{{ $page->url }}</td>
                <td>
                    @if ($page->status == 'published')
                        <span class="btn btn-warning">{{ $page->status }}</span>
                    @else
                        <span class="btn btn-danger">{{ $page->status }}</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('page.edit', $page->id) }}" class="btn btn-success">
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

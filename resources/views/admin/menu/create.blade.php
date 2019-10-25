@extends('admin.layout')

@section('content')
    <h1>Создать пункт меню</h1>
    <form action="{{ route('menu.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="menuTitle">Название пункта</label>
                    <input type="text" name="name" id="menuTitle" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Заголовок меню" value="">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="statusPost">Статус</label>
                    <select name="status" id="statusPost" class="form-control">
                        <option value="published">Published</option>
                        <option value="unpublished">Unpublished</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parentId">Родительский пункт</label>
                    <select name="parent_id" id="parentId" class="form-control">
                        <option value="0">Родитель</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Тип пункта</label>
                    <select name="type" id="type" class="form-control">
                        <option value="page">Страница</option>
                        <option value="url">Путь</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="menuUrl">Url</label>
                    <input type="text" name="order" id="menuUrl" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Сортировка" value="">
                    @if ($errors->has('url'))
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="menuSort">Сортировка</label>
                    <input type="text" name="order" id="menuSort" class="form-control {{ $errors->has('order') ? ' is-invalid' : '' }}" placeholder="Сортировка" value="">
                    @if ($errors->has('order'))
                        <div class="invalid-feedback">
                            {{ $errors->first('order') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <input class="btn btn-primary" type="submit" name="submit" value="Создать">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Отмена</a>
            </div>
        </div>

    </form>
@endsection
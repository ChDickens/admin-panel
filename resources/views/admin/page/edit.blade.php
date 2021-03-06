@extends('admin.layout')

@section('content')
    <h1>Редактировать страницу - {{ $page->name }}</h1>
    <form action="{{ route('page.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="pageTitle">Заголовок</label>
                    <input type="text" name="name" id="pageTitle" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Заголовок страницы" value="">
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
                    <label for="description">Контент</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="pageUrl">Url</label>
                    <input type="text" name="url" id="pageUrl" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Url страницы" value="">
                    @if ($errors->has('url'))
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pageSeoTitle">SeoTitle</label>
                    <input type="text" name="seo_title" id="pageSeoTitle" class="form-control {{ $errors->has('seo_title') ? ' is-invalid' : '' }}" placeholder="Тайтл страницы (СЕО)" value="">
                    @if ($errors->has('seo_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('seo_title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="metaDescription">Мета описание</label>
                    <textarea name="meta_description" id="metaDescription" cols="30" rows="10" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('meta_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('meta_description') }}
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
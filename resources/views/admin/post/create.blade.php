@extends('admin.layout')

@section('content')
    <h1>Создать новый пост</h1>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="postTitle">Заголовок</label>
                    <input type="text" name="name" id="postTitle" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Заголовок поста" value="">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="statusPost">Post status</label>
                    <select name="status" id="statusPost" class="form-control">
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="postImage">Изображение поста</label>
                    <input type="file" class="form-file" name="image" id="postImage">
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
                    <label for="postUrl">Url</label>
                    <input type="text" name="url" id="postUrl" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Url поста" value="">
                    @if ($errors->has('url'))
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="postSeoTitle">SeoTitle</label>
                    <input type="text" name="seo_title" id="postSeoTitle" class="form-control {{ $errors->has('seo_title') ? ' is-invalid' : '' }}" placeholder="Тайтл поста" value="">
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
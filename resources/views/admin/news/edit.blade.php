@extends('admin.layouts.app')

@section('content')
<div class="admin-content">
    <div class="content-header">
        <h1>Редактировать новость</h1>
        <a href="{{ route('admin.news.index') }}" class="btn-secondary">
            ← Назад к списку
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            <strong>Ошибка!</strong> Проверьте правильность заполнения полей.
            <ul style="margin-top: 10px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Заголовок *</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                value="{{ old('title', $news->title) }}"
                required
                placeholder="Введите заголовок новости"
            >
        </div>

        <div class="form-group">
            <label for="excerpt">Краткое описание (для превью)</label>
            <textarea 
                id="excerpt" 
                name="excerpt" 
                rows="3"
                placeholder="Краткое описание новости (отображается в списке новостей)"
            >{{ old('excerpt', $news->excerpt) }}</textarea>
            <small>Максимум 500 символов</small>
        </div>

        <div class="form-group">
            <label for="content">Содержание *</label>
            <textarea 
                id="content" 
                name="content" 
                rows="15"
                required
                placeholder="Полный текст новости"
            >{{ old('content', $news->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Изображение</label>
            
            @if($news->image)
                <div class="current-image">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}">
                    <p>Текущее изображение</p>
                </div>
            @endif
            
            <input 
                type="file" 
                id="image" 
                name="image"
                accept="image/jpeg,image/png,image/jpg,image/gif"
            >
            <small>Форматы: JPEG, PNG, JPG, GIF. Максимум 2 МБ. Если выберете новое - старое будет заменено.</small>
        </div>

        <div class="form-group">
            <label class="checkbox-label">
                <input 
                    type="checkbox" 
                    name="is_published" 
                    value="1"
                    {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                >
                <span>Опубликовать</span>
            </label>
            <small>Если не отмечено, новость будет в черновиках</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="white" stroke-width="2"/>
                    <polyline points="17 21 17 13 7 13 7 21" stroke="white" stroke-width="2"/>
                    <polyline points="7 3 7 8 15 8" stroke="white" stroke-width="2"/>
                </svg>
                Сохранить изменения
            </button>
            <a href="{{ route('admin.news.index') }}" class="btn-cancel">Отмена</a>
        </div>
    </form>
</div>
@endsection
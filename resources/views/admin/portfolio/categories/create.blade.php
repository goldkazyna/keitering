@extends('admin.layouts.app')

@section('content')
<div class="admin-content">
    <div class="content-header">
        <h1>Добавить категорию портфолио</h1>
        <a href="{{ route('admin.portfolio-categories.index') }}" class="btn-secondary">
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

    <form action="{{ route('admin.portfolio-categories.store') }}" method="POST" class="admin-form">
        @csrf

        <div class="form-group">
            <label for="name">Название категории *</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name') }}"
                required
                placeholder="Например: Новый год 2025"
            >
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea 
                id="description" 
                name="description" 
                rows="3"
                placeholder="Краткое описание категории (необязательно)"
            >{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="sort_order">Порядок сортировки</label>
            <input 
                type="number" 
                id="sort_order" 
                name="sort_order" 
                value="{{ old('sort_order', 0) }}"
                placeholder="0"
            >
            <small>Чем меньше число, тем выше в списке</small>
        </div>

        <div class="form-group">
            <label class="checkbox-label">
                <input 
                    type="checkbox" 
                    name="show_on_home" 
                    value="1"
                    {{ old('show_on_home') ? 'checked' : '' }}
                >
                <span>Показывать на главной странице</span>
            </label>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="white" stroke-width="2"/>
                    <polyline points="17 21 17 13 7 13 7 21" stroke="white" stroke-width="2"/>
                    <polyline points="7 3 7 8 15 8" stroke="white" stroke-width="2"/>
                </svg>
                Создать категорию
            </button>
            <a href="{{ route('admin.portfolio-categories.index') }}" class="btn-cancel">Отмена</a>
        </div>
    </form>
</div>
@endsection
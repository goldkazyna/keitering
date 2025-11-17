@extends('admin.layouts.app')

@section('content')
<div class="admin-content">
    <div class="content-header">
        <h1>Портфолио - Категории</h1>
        <a href="{{ route('admin.portfolio-categories.create') }}" class="btn-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Добавить категорию
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 80px;">Порядок</th>
                    <th>Название</th>
                    <th style="width: 120px;">Фото</th>
                    <th style="width: 150px;">На главной</th>
                    <th style="width: 150px;">Дата создания</th>
                    <th style="width: 200px;">Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>
                            <input type="number" value="{{ $category->sort_order }}" class="sort-input" style="width: 60px; text-align: center;">
                        </td>
                        <td>
                            <strong>{{ $category->name }}</strong>
                            @if($category->description)
                                <br><small>{{ Str::limit($category->description, 60) }}</small>
                            @endif
                        </td>
                        <td>
                            <span class="badge badge-info">{{ $category->images_count }}</span>
                        </td>
                        <td>
                            @if($category->show_on_home)
                                <span class="badge badge-success">✓ Показывать</span>
                            @else
                                <span class="badge badge-draft">Скрыто</span>
                            @endif
                        </td>
                        <td>{{ $category->created_at->format('d.m.Y') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.portfolio-categories.show', $category) }}" class="btn-view" title="Просмотр и загрузка фото">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.portfolio-categories.edit', $category) }}" class="btn-edit" title="Редактировать">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.portfolio-categories.destroy', $category) }}" method="POST" style="display: inline;" onsubmit="return confirm('Вы уверены? Удалятся все фотографии этой категории!');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" title="Удалить">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                            <path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Категорий пока нет</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $categories->links() }}
    </div>
</div>

<style>
.sort-input {
    padding: 6px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
}

.badge-info {
    background: #e3f2fd;
    color: #1976d2;
}

.btn-view {
    padding: 8px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s;
    background: none;
    color: #1976d2;
}

.btn-view:hover {
    background: #e3f2fd;
}
</style>
@endsection
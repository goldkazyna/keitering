@extends('admin.layouts.app')

@section('content')
<div class="admin-content">
    <div class="content-header">
        <h1>Новости и блог</h1>
        <a href="{{ route('admin.news.create') }}" class="btn-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 5v14M5 12h14" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Добавить новость
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
                    <th>ID</th>
                    <th>Изображение</th>
                    <th>Заголовок</th>
                    <th>Автор</th>
                    <th>Статус</th>
                    <th>Дата создания</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="table-image">
                            @else
                                <div class="no-image">Нет фото</div>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $item->title }}</strong>
                            @if($item->excerpt)
                                <br><small>{{ Str::limit($item->excerpt, 60) }}</small>
                            @endif
                        </td>
                        <td>{{ $item->user->name }}</td>
                        <td>
                            @if($item->is_published)
                                <span class="badge badge-success">Опубликовано</span>
                            @else
                                <span class="badge badge-draft">Черновик</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.news.edit', $item) }}" class="btn-edit" title="Редактировать">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display: inline;" onsubmit="return confirm('Вы уверены, что хотите удалить эту новость?');">
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
                        <td colspan="7" class="text-center">Новостей пока нет</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $news->links() }}
    </div>
</div>
@endsection
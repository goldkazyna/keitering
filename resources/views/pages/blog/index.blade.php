@extends('layouts.app')

@section('title', 'Блог — Ёжик Кейтеринг | Статьи о кейтеринге')
@section('description', 'Блог кейтеринг компании «Ёжик»: полезные статьи об организации мероприятий, советы по выбору меню, тренды кейтеринга.')
@section('keywords', 'блог кейтеринг, статьи о кейтеринге, организация мероприятий, советы по кейтерингу')

@section('content')
<style>
    .blog-page {
        padding: 100px 0 80px;
        background: #F3F3F3;
    }

    .blog-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .blog-header h1 {
        font-family: "Lora", sans-serif;
        font-size: 42px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 15px;
        padding-top: 10px;
    }

    .blog-header p {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #666;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        margin-bottom: 60px;
    }

    .blog-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .blog-card-image {
        width: 100%;
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .blog-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card:hover .blog-card-image img {
        transform: scale(1.05);
    }

    .blog-card-date {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(80, 102, 126, 0.9);
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        font-family: "Lora", sans-serif;
        font-size: 14px;
        font-weight: 500;
    }

    .blog-card-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-card-title {
        font-family: "Lora", sans-serif;
        font-size: 24px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card-excerpt {
        font-family: "Lora", sans-serif;
        font-size: 16px;
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card-link {
        font-family: "Lora", sans-serif;
        font-size: 16px;
        color: #FF750F;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .blog-card:hover .blog-card-link {
        gap: 12px;
    }

    .blog-card-link svg {
        width: 20px;
        height: 20px;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 40px;
    }

    .pagination a,
    .pagination span {
        font-family: "Lora", sans-serif;
        font-size: 16px;
        color: #1A3853;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 6px;
        background: white;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .pagination a:hover {
        background: #1A3853;
        color: white;
    }

    .pagination .active {
        background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
        color: white;
        font-weight: 600;
    }

    .pagination .disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    /* Пустое состояние */
    .empty-state {
        text-align: center;
        padding: 80px 20px;
    }

    .empty-state h2 {
        font-family: "Lora", sans-serif;
        font-size: 28px;
        color: #1A3853;
        margin-bottom: 15px;
    }

    .empty-state p {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #666;
    }

    /* Адаптив */
    @media (max-width: 768px) {
        .blog-page {
            padding: 80px 0 60px;
        }

        .blog-header h1 {
            font-size: 32px;
        }

        .blog-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .blog-card-image {
            height: 250px;
        }

        .blog-card-content {
            padding: 20px;
        }

        .blog-card-title {
            font-size: 20px;
        }
    }
</style>

<div class="blog-page">
    <div class="main">
        <div class="blog-header">
            <h1>Блог и новости</h1>
            <p>Последние новости из мира кейтеринга</p>
        </div>

        @if($news->count() > 0)
            <div class="blog-grid">
                @foreach($news as $article)
                    <a href="{{ route('blog.show', $article->slug) }}" class="blog-card">
                        <div class="blog-card-image">
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                            @else
                                <img src="{{ asset('img/blog-placeholder.jpg') }}" alt="{{ $article->title }}">
                            @endif
                            <div class="blog-card-date">
                                {{ $article->published_at->format('d.m.Y') }}
                            </div>
                        </div>
                        <div class="blog-card-content">
                            <h2 class="blog-card-title">{{ $article->title }}</h2>
                            @if($article->excerpt)
                                <p class="blog-card-excerpt">{{ $article->excerpt }}</p>
                            @endif
                            <span class="blog-card-link">
                                Читать далее
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Пагинация --}}
            @if($news->hasPages())
                <div class="pagination">
                    {{-- Предыдущая --}}
                    @if ($news->onFirstPage())
                        <span class="disabled">←</span>
                    @else
                        <a href="{{ $news->previousPageUrl() }}">←</a>
                    @endif

                    {{-- Номера страниц --}}
                    @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                        @if ($page == $news->currentPage())
                            <span class="active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach

                    {{-- Следующая --}}
                    @if ($news->hasMorePages())
                        <a href="{{ $news->nextPageUrl() }}">→</a>
                    @else
                        <span class="disabled">→</span>
                    @endif
                </div>
            @endif
        @else
            <div class="empty-state">
                <h2>Пока нет опубликованных новостей</h2>
                <p>Следите за обновлениями!</p>
            </div>
        @endif
    </div>
</div>

<!-- WhatsApp кнопка -->
<a href="https://wa.me/77012672992" class="whatsapp-float" target="_blank">
    <svg viewBox="0 0 32 32" fill="white">
        <path d="M16 0C7.164 0 0 7.164 0 16c0 2.826.736 5.588 2.138 8.024L.07 31.93l8.095-2.05A15.936 15.936 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.924 22.574c-.37.927-2.176 1.758-2.996 1.872-.82.114-1.59.37-5.366-1.114-4.82-1.894-7.91-6.733-8.152-7.044-.242-.31-1.978-2.632-1.978-5.022s1.253-3.562 1.699-4.048c.446-.485.974-.608 1.298-.608.324 0 .648.006.932.017.298.012.698-.114.995.758.37.906 1.253 3.064 1.364 3.287.11.223.185.486.037.796-.148.31-.223.503-.446.776-.223.273-.468.61-.668.818-.223.242-.455.505-.196.99.26.486.95 1.566 2.177 2.536 1.578 1.248 2.906 1.635 3.32 1.82.413.185.655.154.896-.093.242-.248.95-1.106 1.202-1.486.252-.38.503-.317.847-.19.345.127 2.187 1.03 2.562 1.217.375.187.625.28.715.435.09.155.09.906-.28 1.833z"/>
    </svg>
</a>

<style>
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 30px;
    right: 30px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
    z-index: 999;
    transition: all 0.3s ease;
    animation: pulse 2s infinite;
}

.whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
}

.whatsapp-float svg {
    width: 32px;
    height: 32px;
}

@keyframes pulse {
    0% {
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
    }
    50% {
        box-shadow: 0 4px 25px rgba(37, 211, 102, 0.7);
    }
    100% {
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
    }
}

@media (max-width: 768px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
    }
    
    .whatsapp-float svg {
        width: 28px;
        height: 28px;
    }
}
</style>
@endsection
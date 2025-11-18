@extends('layouts.app')

@section('title', 'Портфолио - Ёжик Кейтеринг')
@section('description', 'Наши работы по организации кейтеринга в Алматы и Астане')

@section('content')
<style>
    .portfolio-page {
        padding: 100px 0 80px;
        background: #F3F3F3;
    }

    .portfolio-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .portfolio-header h1 {
        font-family: "Lora", sans-serif;
        font-size: 42px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 15px;
        padding-top: 10px;
    }

    .portfolio-header p {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #666;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        margin-bottom: 60px;
    }

    .portfolio-card {
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

    .portfolio-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .portfolio-card-image {
        width: 100%;
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .portfolio-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .portfolio-card:hover .portfolio-card-image img {
        transform: scale(1.05);
    }

    .portfolio-card-count {
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
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .portfolio-card-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .portfolio-card-title {
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

    .portfolio-card-description {
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

    .portfolio-card-link {
        font-family: "Lora", sans-serif;
        font-size: 16px;
        color: #FF750F;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .portfolio-card:hover .portfolio-card-link {
        gap: 12px;
    }

    .portfolio-card-link svg {
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
        .portfolio-page {
            padding: 80px 0 60px;
        }

        .portfolio-header h1 {
            font-size: 32px;
        }

        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .portfolio-card-image {
            height: 250px;
        }

        .portfolio-card-content {
            padding: 20px;
        }

        .portfolio-card-title {
            font-size: 20px;
        }
    }
</style>

<div class="portfolio-page">
    <div class="main">
        <div class="portfolio-header">
            <h1>Наше портфолио</h1>
            <p>Работы по организации кейтеринга</p>
        </div>

        @if($categories->count() > 0)
            <div class="portfolio-grid">
                @foreach($categories as $category)
                    <a href="{{ route('portfolio.show', $category->slug) }}" class="portfolio-card">
                        <div class="portfolio-card-image">
                            @if($category->images->count() > 0)
                                <img src="{{ asset('storage/' . $category->images->first()->medium_path) }}" alt="{{ $category->name }}">
                            @else
                                <img src="{{ asset('img/portfolio-placeholder.jpg') }}" alt="{{ $category->name }}">
                            @endif
                            <div class="portfolio-card-count">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                    <circle cx="8.5" cy="8.5" r="1.5"/>
                                    <polyline points="21 15 16 10 5 21"/>
                                </svg>
                                {{ $category->images_count }} фото
                            </div>
                        </div>
                        <div class="portfolio-card-content">
                            <h2 class="portfolio-card-title">{{ $category->name }}</h2>
                            @if($category->description)
                                <p class="portfolio-card-description">{{ $category->description }}</p>
                            @endif
                            <span class="portfolio-card-link">
                                Смотреть работы
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Пагинация --}}
            @if($categories->hasPages())
                <div class="pagination">
                    {{-- Предыдущая --}}
                    @if ($categories->onFirstPage())
                        <span class="disabled">←</span>
                    @else
                        <a href="{{ $categories->previousPageUrl() }}">←</a>
                    @endif

                    {{-- Номера страниц --}}
                    @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                        @if ($page == $categories->currentPage())
                            <span class="active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach

                    {{-- Следующая --}}
                    @if ($categories->hasMorePages())
                        <a href="{{ $categories->nextPageUrl() }}">→</a>
                    @else
                        <span class="disabled">→</span>
                    @endif
                </div>
            @endif
        @else
            <div class="empty-state">
                <h2>Пока нет категорий портфолио</h2>
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
@extends('layouts.app')

@section('title', $article->title . ' - Блог Ёжик Кейтеринг')
@section('description', $article->excerpt ?? Str::limit(strip_tags($article->content), 160))

@section('content')
<style>
    .article-page {
        padding: 100px 0 80px;
        background: #F3F3F3;
    }

    .article-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Breadcrumbs */
    .breadcrumbs {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 30px;
        font-family: "Lora", sans-serif;
        font-size: 14px;
    }

    .breadcrumbs a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumbs a:hover {
        color: #FF750F;
    }

    .breadcrumbs span {
        color: #1A3853;
        font-weight: 600;
    }

    /* Статья */
    .article-header {
        background: white;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .article-date {
        display: inline-block;
        background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
        color: white;
        padding: 8px 20px;
        border-radius: 6px;
        font-family: "Lora", sans-serif;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .article-title {
        font-family: "Lora", sans-serif;
        font-size: 42px;
        color: #1A3853;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 20px;
        padding-top: 10px;
    }

    .article-excerpt {
        font-family: "Lora", sans-serif;
        font-size: 20px;
        color: #666;
        line-height: 1.6;
        font-weight: 500;
    }

    .article-image {
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .article-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .article-content {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 40px;
    }

    .article-content p {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .article-content h2 {
        font-family: "Lora", sans-serif;
        font-size: 32px;
        color: #1A3853;
        font-weight: 700;
        margin: 40px 0 20px;
    }

    .article-content h3 {
        font-family: "Lora", sans-serif;
        font-size: 26px;
        color: #1A3853;
        font-weight: 700;
        margin: 30px 0 15px;
    }

    .article-content ul,
    .article-content ol {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 20px;
        padding-left: 30px;
    }

    .article-content li {
        margin-bottom: 10px;
    }

    .article-content blockquote {
        border-left: 4px solid #FF750F;
        padding-left: 20px;
        margin: 30px 0;
        font-style: italic;
        color: #666;
    }

    /* Кнопка назад */
    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #50667E;
        color: white;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-family: "Lora", sans-serif;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-bottom: 40px;
    }

    .back-button:hover {
        background: #1A3853;
        gap: 15px;
    }

    .back-button svg {
        width: 20px;
        height: 20px;
    }

    /* Похожие новости */
    .related-news {
        margin-top: 60px;
    }

    .related-news-title {
        font-family: "Lora", sans-serif;
        font-size: 32px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
    }

    .related-news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .related-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .related-card-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .related-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .related-card:hover .related-card-image img {
        transform: scale(1.05);
    }

    .related-card-content {
        padding: 20px;
    }

    .related-card-title {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .related-card-link {
        font-family: "Lora", sans-serif;
        font-size: 14px;
        color: #FF750F;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s ease;
    }

    .related-card-link:hover {
        gap: 10px;
    }

    /* Адаптив */
    @media (max-width: 768px) {
        .article-page {
            padding: 80px 0 60px;
        }

        .article-header {
            padding: 25px;
        }

        .article-title {
            font-size: 28px;
        }

        .article-excerpt {
            font-size: 16px;
        }

        .article-content {
            padding: 25px;
        }

        .article-content p {
            font-size: 16px;
        }

        .article-content h2 {
            font-size: 24px;
        }

        .article-content h3 {
            font-size: 20px;
        }

        .related-news-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="article-page">
    <div class="main">
        <div class="article-container">
            <!-- Хлебные крошки -->
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Главная</a>
                <span>→</span>
                <a href="{{ route('blog') }}">Блог</a>
                <span>→</span>
                <span>{{ Str::limit($article->title, 50) }}</span>
            </div>

            <!-- Кнопка назад -->
            <a href="{{ route('blog') }}" class="back-button">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Вернуться к списку
            </a>

            <!-- Заголовок статьи -->
            <div class="article-header">
                <div class="article-date">
                    {{ $article->published_at->format('d.m.Y') }}
                </div>
                <h1 class="article-title">{{ $article->title }}</h1>
                @if($article->excerpt)
                    <p class="article-excerpt">{{ $article->excerpt }}</p>
                @endif
            </div>

            <!-- Изображение -->
            @if($article->image)
                <div class="article-image">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                </div>
            @endif

            <!-- Контент статьи -->
            <div class="article-content">
                {!! nl2br(e($article->content)) !!}
            </div>

            <!-- Похожие новости -->
            @if($relatedNews->count() > 0)
                <div class="related-news">
                    <h2 class="related-news-title">Читайте также</h2>
                    <div class="related-news-grid">
                        @foreach($relatedNews as $related)
                            <div class="related-card">
                                <div class="related-card-image">
                                    @if($related->image)
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}">
                                    @else
                                        <img src="{{ asset('img/blog-placeholder.jpg') }}" alt="{{ $related->title }}">
                                    @endif
                                </div>
                                <div class="related-card-content">
                                    <h3 class="related-card-title">{{ $related->title }}</h3>
                                    <a href="{{ route('blog.show', $related->slug) }}" class="related-card-link">
                                        Читать
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
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
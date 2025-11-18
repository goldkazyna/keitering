@extends('layouts.app')

@section('title', $category->name . ' - Портфолио Ёжик Кейтеринг')
@section('description', $category->description ?? 'Портфолио работ по кейтерингу')

@section('content')
<style>
    .portfolio-category-page {
        padding: 100px 0 80px;
        background: #F3F3F3;
    }

    .portfolio-category-container {
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

    /* Заголовок категории */
    .category-header {
        background: white;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .category-count {
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

    .category-title {
        font-family: "Lora", sans-serif;
        font-size: 42px;
        color: #1A3853;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 20px;
        padding-top: 10px;
    }

    .category-description {
        font-family: "Lora", sans-serif;
        font-size: 20px;
        color: #666;
        line-height: 1.6;
        font-weight: 500;
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

    /* Галерея фотографий */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        cursor: pointer;
        transition: all 0.3s ease;
        aspect-ratio: 1;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-item-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 56, 83, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-item-overlay {
        opacity: 1;
    }

    .gallery-item-icon {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gallery-item-icon svg {
        width: 30px;
        height: 30px;
        stroke: white;
    }

    /* Lightbox (модальное окно для фото) */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 10000;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .lightbox.active {
        display: flex;
    }

    .lightbox-content {
        max-width: 90%;
        max-height: 90%;
        position: relative;
    }

    .lightbox-image {
        max-width: 100%;
        max-height: 90vh;
        border-radius: 8px;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .lightbox-close:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }

    .lightbox-close svg {
        width: 24px;
        height: 24px;
        stroke: white;
    }

    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .lightbox-nav:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .lightbox-nav svg {
        width: 24px;
        height: 24px;
        stroke: white;
    }

    .lightbox-prev {
        left: 20px;
    }

    .lightbox-next {
        right: 20px;
    }

    /* Похожие категории */
    .related-categories {
        margin-top: 60px;
    }

    .related-categories-title {
        font-family: "Lora", sans-serif;
        font-size: 32px;
        color: #1A3853;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
    }

    .related-categories-grid {
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
        text-decoration: none;
        color: inherit;
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

    .related-card-count {
        font-family: "Lora", sans-serif;
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .related-card-link {
        font-family: "Lora", sans-serif;
        font-size: 14px;
        color: #FF750F;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s ease;
    }

    .related-card:hover .related-card-link {
        gap: 10px;
    }

    /* Пустое состояние */
    .empty-gallery {
        text-align: center;
        padding: 80px 20px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .empty-gallery h2 {
        font-family: "Lora", sans-serif;
        font-size: 28px;
        color: #1A3853;
        margin-bottom: 15px;
    }

    .empty-gallery p {
        font-family: "Lora", sans-serif;
        font-size: 18px;
        color: #666;
    }

    /* Адаптив */
    @media (max-width: 768px) {
        .portfolio-category-page {
            padding: 80px 0 60px;
        }

        .category-header {
            padding: 25px;
        }

        .category-title {
            font-size: 28px;
        }

        .category-description {
            font-size: 16px;
        }

        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .related-categories-grid {
            grid-template-columns: 1fr;
        }

        .lightbox-nav {
            width: 40px;
            height: 40px;
        }

        .lightbox-prev {
            left: 10px;
        }

        .lightbox-next {
            right: 10px;
        }
    }
</style>

<div class="portfolio-category-page">
    <div class="main">
        <div class="portfolio-category-container">
            <!-- Хлебные крошки -->
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Главная</a>
                <span>→</span>
                <a href="{{ route('portfolio') }}">Портфолио</a>
                <span>→</span>
                <span>{{ Str::limit($category->name, 50) }}</span>
            </div>

            <!-- Кнопка назад -->
            <a href="{{ route('portfolio') }}" class="back-button">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Вернуться к портфолио
            </a>

            <!-- Заголовок категории -->
            <div class="category-header">
                <div class="category-count">
                    {{ $category->images->count() }} фотографий
                </div>
                <h1 class="category-title">{{ $category->name }}</h1>
                @if($category->description)
                    <p class="category-description">{{ $category->description }}</p>
                @endif
            </div>

            <!-- Галерея фотографий -->
            @if($category->images->count() > 0)
                <div class="gallery-grid">
                    @foreach($category->images as $index => $image)
                        <div class="gallery-item" onclick="openLightbox({{ $index }})">
                            <img src="{{ asset('storage/' . $image->medium_path) }}" alt="{{ $category->name }}">
                            <div class="gallery-item-overlay">
                                <div class="gallery-item-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"/>
                                        <path d="M21 21l-4.35-4.35"/>
                                        <line x1="11" y1="8" x2="11" y2="14"/>
                                        <line x1="8" y1="11" x2="14" y2="11"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-gallery">
                    <h2>В этой категории пока нет фотографий</h2>
                    <p>Скоро мы добавим работы</p>
                </div>
            @endif

            <!-- Похожие категории -->
            @if($otherCategories->count() > 0)
                <div class="related-categories">
                    <h2 class="related-categories-title">Другие работы</h2>
                    <div class="related-categories-grid">
                        @foreach($otherCategories as $related)
                            <a href="{{ route('portfolio.show', $related->slug) }}" class="related-card">
                                <div class="related-card-image">
                                    @if($related->images->count() > 0)
                                        <img src="{{ asset('storage/' . $related->images->first()->medium_path) }}" alt="{{ $related->name }}">
                                    @else
                                        <img src="{{ asset('img/portfolio-placeholder.jpg') }}" alt="{{ $related->name }}">
                                    @endif
                                </div>
                                <div class="related-card-content">
                                    <h3 class="related-card-title">{{ $related->name }}</h3>
                                    <p class="related-card-count">{{ $related->images_count }} фото</p>
                                    <span class="related-card-link">
                                        Смотреть
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Lightbox для просмотра фото -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" onclick="closeLightbox()">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>
    
    <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1)">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15 18 9 12 15 6"/>
        </svg>
    </button>
    
    <div class="lightbox-content">
        <img id="lightbox-img" class="lightbox-image" src="" alt="">
    </div>
    
    <button class="lightbox-nav lightbox-next" onclick="changeImage(1)">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"/>
        </svg>
    </button>
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

<script>
    // Данные изображений для lightbox
    const images = [
        @foreach($category->images as $image)
            {
                large: "{{ asset('storage/' . $image->original_path) }}",
                medium: "{{ asset('storage/' . $image->medium_path) }}"
            },
        @endforeach
    ];
    
    let currentImageIndex = 0;
    
    function openLightbox(index) {
        currentImageIndex = index;
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        
        lightboxImg.src = images[currentImageIndex].large;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    
    function changeImage(direction) {
        currentImageIndex += direction;
        
        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        } else if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }
        
        const lightboxImg = document.getElementById('lightbox-img');
        lightboxImg.src = images[currentImageIndex].large;
    }
    
    // Закрытие по клику на фон
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });
    
    // Закрытие по ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (e.key === 'ArrowRight') {
            changeImage(1);
        }
    });
</script>
@endsection
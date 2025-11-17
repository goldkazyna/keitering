@extends('admin.layouts.app')

@section('content')
<div class="admin-content">
    <div class="content-header">
        <div>
            <h1>{{ $portfolioCategory->name }}</h1>
            @if($portfolioCategory->description)
                <p style="color: #666; margin-top: 5px;">{{ $portfolioCategory->description }}</p>
            @endif
        </div>
        <a href="{{ route('admin.portfolio-categories.index') }}" class="btn-secondary">
            ← Назад к списку
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Форма загрузки фотографий -->
    <div class="upload-section">
        <h2>Загрузить фотографии</h2>
        <form action="{{ route('admin.portfolio-images.store', $portfolioCategory) }}" method="POST" enctype="multipart/form-data" class="upload-form">
            @csrf
            
            <div class="form-group">
                <label for="images">Выберите изображения</label>
                <input 
                    type="file" 
                    id="images" 
                    name="images[]" 
                    multiple
                    accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                    required
                >
                <small>Можно выбрать несколько файлов. Форматы: JPEG, PNG, JPG, GIF, WebP. Максимум 5 МБ каждый.</small>
                <small style="color: #1976d2; display: block; margin-top: 5px;">
                    ℹ️ Изображения автоматически конвертируются в WebP и создаются в размерах: 630×810 и 630×395
                </small>
            </div>

            <button type="submit" class="btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Загрузить фото
            </button>
        </form>
    </div>

    <!-- Галерея фотографий -->
    <div class="gallery-section">
        <h2>Фотографии ({{ $portfolioCategory->images->count() }})</h2>
        
        @if($portfolioCategory->images->count() > 0)
            <div class="portfolio-gallery">
                @foreach($portfolioCategory->images as $image)
                    <div class="gallery-item" data-id="{{ $image->id }}">
                        <img src="{{ asset('storage/' . $image->medium_path) }}" alt="Portfolio image">
                        <div class="gallery-item-overlay">
                            <div class="gallery-item-actions">
                                <a href="{{ asset('storage/' . $image->original_path) }}" target="_blank" class="btn-view-full">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="white" stroke-width="2"/>
                                        <circle cx="12" cy="12" r="3" stroke="white" stroke-width="2"/>
                                    </svg>
                                    Оригинал
                                </a>
                                <form action="{{ route('admin.portfolio-images.destroy', $image) }}" method="POST" style="display: inline;" onsubmit="return confirm('Удалить это изображение?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete-image">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                            <path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="white" stroke-width="2"/>
                                        </svg>
                                        Удалить
                                    </button>
                                </form>
                            </div>
                            <div class="gallery-item-info">
                                <small>630×395 (средний)</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-gallery">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="#ccc" stroke-width="2"/>
                    <circle cx="8.5" cy="8.5" r="1.5" fill="#ccc"/>
                    <path d="M21 15l-5-5L5 21" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>В этой категории пока нет фотографий</p>
            </div>
        @endif
    </div>
</div>

<style>
.upload-section {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 40px;
}

.upload-section h2 {
    font-size: 20px;
    color: #1A3853;
    margin-bottom: 20px;
}

.upload-form {
    max-width: 600px;
}

.gallery-section h2 {
    font-size: 20px;
    color: #1A3853;
    margin-bottom: 25px;
}

.portfolio-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}

.gallery-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
}

.gallery-item-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, transparent 50%, rgba(0,0,0,0.7) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
}

.gallery-item:hover .gallery-item-overlay {
    opacity: 1;
}

.gallery-item-actions {
    display: flex;
    gap: 10px;
}

.btn-view-full,
.btn-delete-image {
    padding: 8px 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s;
    text-decoration: none;
}

.btn-view-full {
    background: #1976d2;
    color: white;
}

.btn-view-full:hover {
    background: #1565c0;
}

.btn-delete-image {
    background: #dc3545;
    color: white;
}

.btn-delete-image:hover {
    background: #c82333;
}

.gallery-item-info {
    text-align: center;
}

.gallery-item-info small {
    color: white;
    font-size: 12px;
}

.empty-gallery {
    text-align: center;
    padding: 60px 20px;
    color: #999;
}

.empty-gallery svg {
    margin-bottom: 20px;
}

.empty-gallery p {
    font-size: 16px;
}
</style>
@endsection
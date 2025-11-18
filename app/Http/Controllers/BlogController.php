<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Список всех опубликованных новостей
    public function index()
    {
        $news = News::published()
            ->orderBy('published_at', 'desc')
            ->paginate(12); // По 12 новостей на странице (6 рядов по 2)
        
        return view('pages.blog.index', compact('news'));
    }

    // Отдельная страница новости
    public function show($slug)
    {
        $article = News::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        
        // Похожие новости (последние 3, кроме текущей)
        $relatedNews = News::published()
            ->where('id', '!=', $article->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
        
        return view('pages.blog.show', compact('article', 'relatedNews'));
    }
}
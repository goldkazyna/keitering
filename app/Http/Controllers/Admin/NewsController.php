<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Список всех новостей
    public function index()
    {
        $news = News::with('user')->latest()->paginate(15);
        return view('admin.news.index', compact('news'));
    }

    // Форма создания новости
    public function create()
    {
        return view('admin.news.create');
    }

    // Сохранение новости
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);

        // Генерация slug
        $validated['slug'] = Str::slug($validated['title']);
        
        // Загрузка изображения
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Установка даты публикации
        if (!empty($validated['is_published'])) {
            $validated['published_at'] = now();
        }

        $validated['user_id'] = Auth::id();

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно создана!');
    }

    // Форма редактирования
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Обновление новости
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);

        // Обновление slug если изменился заголовок
        if ($news->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Загрузка нового изображения
        if ($request->hasFile('image')) {
            // Удаление старого изображения
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Установка/снятие даты публикации
        if (!empty($validated['is_published']) && !$news->is_published) {
            $validated['published_at'] = now();
        } elseif (empty($validated['is_published'])) {
            $validated['published_at'] = null;
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно обновлена!');
    }

    // Удаление новости
    public function destroy(News $news)
    {
        // Удаление изображения
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно удалена!');
    }
}
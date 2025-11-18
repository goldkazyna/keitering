<?php

namespace App\Http\Controllers;

use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Список всех категорий портфолио
    public function index()
    {
        $categories = PortfolioCategory::withCount('images')
            ->orderBy('sort_order')
            ->paginate(12); // По 12 категорий на странице (6 рядов по 2)
        
        return view('pages.portfolio.index', compact('categories'));
    }

    // Отдельная категория с фотографиями
    public function show($slug)
    {
        $category = PortfolioCategory::where('slug', $slug)
            ->with(['images' => function ($query) {
                $query->orderBy('sort_order');
            }])
            ->firstOrFail();
        
        // Другие категории (для блока "Смотрите также")
        $otherCategories = PortfolioCategory::where('id', '!=', $category->id)
            ->withCount('images')
            ->orderBy('sort_order')
            ->limit(3)
            ->get();
        
        return view('pages.portfolio.show', compact('category', 'otherCategories'));
    }
}
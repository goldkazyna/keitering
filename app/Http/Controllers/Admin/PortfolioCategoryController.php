<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::withCount('images')
            ->orderBy('sort_order')
            ->paginate(20);
        
        return view('admin.portfolio.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.portfolio.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'show_on_home' => 'boolean',
        ]);

        PortfolioCategory::create($validated);

        return redirect()->route('admin.portfolio-categories.index')
            ->with('success', 'Категория успешно создана!');
    }

    public function show(PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->load(['images' => function ($query) {
            $query->orderBy('sort_order');
        }]);
        
        return view('admin.portfolio.categories.show', compact('portfolioCategory'));
    }

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolio.categories.edit', compact('portfolioCategory'));
    }

    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'show_on_home' => 'boolean',
        ]);

        $portfolioCategory->update($validated);

        return redirect()->route('admin.portfolio-categories.index')
            ->with('success', 'Категория успешно обновлена!');
    }

    public function destroy(PortfolioCategory $portfolioCategory)
    {
        // При удалении категории автоматически удалятся все изображения
        // благодаря onDelete('cascade') и событию deleting в модели
        $portfolioCategory->delete();

        return redirect()->route('admin.portfolio-categories.index')
            ->with('success', 'Категория и все её изображения успешно удалены!');
    }
}
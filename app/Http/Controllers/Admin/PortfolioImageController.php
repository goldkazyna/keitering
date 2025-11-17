<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\PortfolioImage;
use App\Services\ImageService;
use Illuminate\Http\Request;

class PortfolioImageController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function store(Request $request, PortfolioCategory $category)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // 5MB
        ]);

        foreach ($request->file('images') as $file) {
            $paths = $this->imageService->processPortfolioImage($file, $category->id);
            
            PortfolioImage::create([
                'portfolio_category_id' => $category->id,
                'original_path' => $paths['original_path'],
                'large_path' => $paths['large_path'],
                'medium_path' => $paths['medium_path'],
                'sort_order' => PortfolioImage::where('portfolio_category_id', $category->id)->max('sort_order') + 1,
            ]);
        }

        return redirect()->route('admin.portfolio-categories.show', $category)
            ->with('success', 'Изображения успешно загружены!');
    }

    public function destroy(PortfolioImage $image)
    {
        $categoryId = $image->portfolio_category_id;
        $image->delete();

        return redirect()->route('admin.portfolio-categories.show', $categoryId)
            ->with('success', 'Изображение успешно удалено!');
    }

    public function updateOrder(Request $request, PortfolioCategory $category)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*.id' => 'required|exists:portfolio_images,id',
            'images.*.sort_order' => 'required|integer',
        ]);

        foreach ($request->images as $imageData) {
            PortfolioImage::where('id', $imageData['id'])
                ->update(['sort_order' => $imageData['sort_order']]);
        }

        return response()->json(['success' => true]);
    }
}